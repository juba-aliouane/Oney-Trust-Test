<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\AddressMethods;
use App\Entity\FieldsAddress;
use App\Form\FieldsAddressType;
use App\Entity\FullAddress;
use App\Form\FullAddressType;
class FormController extends AbstractController {
    /**
     * @Route("/",name = "index")
     */
    public function index(Request $request) {
        return $this->redirectToRoute('form_address', ['id' => "fields_address"]);
    }
    /**
     * @Route("/{id}",name = "form_address")
     */
    public function create(Request $request, $id) {
        $submitted = false;
        if ($id == 'fields_address') {
            $address = new FieldsAddress();
            $form = $this->createForm(FieldsAddressType::class, $address);
            $form->handleRequest($request);
            $distance = null;
            if ($form->isSubmitted()) {
                $submitted = true;
                $street = $address->getStreet();
                $zipcode = $address->getZipCode();
                $city = $address->getCity();
                $country = $address->getCountry();
            } else {
                return $this->render('createFieldsAddress.html.twig', ['formAddress' => $form->createView() ]);
            }
        } else if ($id == 'full_address') {
            $address = new FullAddress();
            $form = $this->createForm(FullAddressType::class, $address);
            $form->handleRequest($request);
            if ($form->isSubmitted()) {
                $submitted = true;
                $addressValue = $address->getAddressValue();
                preg_match('/^(.*), ([0-9]{5,5}) (.*) (.*)/', $addressValue, $matches, PREG_OFFSET_CAPTURE);
                dump($matches[2]);
                $street = $matches[1][0];
                $zipcode = $matches[2][0];
                $city = $matches[3][0];
                $country = $matches[4][0];
            } else {
                return $this->render('createFullAddress.html.twig', ['formAddress' => $form->createView() ]);
            }
        }
        if ($submitted) {
            $apiKey = 'at_LgETTDsTbaA1zpTyO8adfbRXDm3Io';
            $apiUrl = 'https://geo.ipify.org/api/v1';
            $addressMethods = new AddressMethods();
            $coordinates = $addressMethods->getDataFromIpAddress($apiKey, $apiUrl);
            $latitudeTo = $coordinates[0];
            $longitudeTo = $coordinates[1];
            $ipPostalAddress = $coordinates[2];
            $postalAddress = array('street' => $street, 'zip code' => $zipcode, 'city' => $city, 'country' => $country);
            $apiUrl = "http://open.mapquestapi.com/geocoding/v1/address?key=tcEOY7AHSMB2jx13ASNFAPyRmteXtldW&location=";
            $coordinates = $addressMethods->getDataFromPostalAddress($apiUrl, $street, $zipcode, $city, $country);
            $latitudeFrom = $coordinates[0];
            $longitudeFrom = $coordinates[1];
            $distance = $addressMethods->getDistanceBetweenToAddresses($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo);
            return $this->render('result.html.twig', ['id' => $id, 'distance' => round($distance, 2), "ipAddress" => $ipPostalAddress, "postalAddress" => $postalAddress]);
        }
    }
}
