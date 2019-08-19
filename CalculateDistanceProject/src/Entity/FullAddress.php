<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\FullAddressRepository")
 */
class FullAddress {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex("/^((.*), ([0-9]{5,5}) (.*) (.*))/", message="you have to write the address in the correct format")
     */
    private $addressValue;
    public function getId(): ? int {
        return $this->id;
    }
    public function getAddressValue() : ? string {
        return $this->addressValue;
    }
    public function setAddressValue(string $addressValue) : self {
        $this->addressValue = $addressValue;
        return $this;
    }
}
    