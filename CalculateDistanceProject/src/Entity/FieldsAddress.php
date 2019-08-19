<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\FieldsAddressRepository")
 */
class FieldsAddress {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $street;
    /**
     * @ORM\Column(type="string", length=5)
     *  @Assert\Regex("/^[0-9]{5,5}/")
     */
    private $zipCode;
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $city;
    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\Country
     */
    private $country;
    public function getId(): ? int {
        return $this->id;
    }
    public function getStreet() : ? string {
        return $this->street;
    }
    public function setStreet(string $street) : self {
        $this->street = $street;
        return $this;
    }
    public function getZipCode(): ? string {
        return $this->zipCode;
    }
    public function setZipCode(string $zipCode) : self {
        $this->zipCode = $zipCode;
        return $this;
    }
    public function getCity(): ? string {
        return $this->city;
    }
    public function setCity(string $city) : self {
        $this->city = $city;
        return $this;
    }
    public function getCountry(): ? string {
        return $this->country;
    }
    public function setCountry(string $country) : self {
        $this->country = $country;
        return $this;
    }
}
                