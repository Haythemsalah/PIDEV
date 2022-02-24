<?php

namespace App\Entity;
use Serializable;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Serializer;


/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 * @UniqueEntity(
 *     fields={"username"},
 *     message="Le login que vous avez indiqué est déjà utilisé!"
 * )
 */
class Client implements UserInterface ,Serializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_client;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="champ obligatoir")
     */
    private $nomC;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomC;

    /**
     * @ORM\Column(type="date")
     *  /**
     * @Assert\Date
     * @var string A "Y-m-d" formatted value
     */

    private $date_de_naiss_C;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $sexeC;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseC;

    /**
     * @ORM\Column(type="integer")
     *  @Assert\Positive
     */
    private $telephoneC;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true)
     */
    private $EmailC;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8",minMessage="votre mot de passe doit faire minimum 8 caractéres")
     * @Assert\EqualTo(propertyPath="confirm_password",message="vous n'avez pas tapé le même mot de pass")
     */
    private $password;
    /**
     * @Assert\EqualTo(propertyPath="password",message="vous n'avez pas tapé le même mot de pass")
     */
    public $confirm_password;




    public function getId(): ?int
    {
        return $this->id_client;
    }

    public function getNomC(): ?string
    {
        return $this->nomC;
    }

    public function setNomC(string $nomC): self
    {
        $this->nomC = $nomC;

        return $this;
    }

    public function getPrenomC(): ?string
    {
        return $this->prenomC;
    }

    public function setPrenomC(string $prenomC): self
    {
        $this->prenomC = $prenomC;

        return $this;
    }

    public function getDateDeNaissC(): ?\DateTimeInterface
    {
        return $this->date_de_naiss_C;
    }

    public function setDateDeNaissC(\DateTimeInterface $date_de_naiss_C): self
    {
        $this->date_de_naiss_C = $date_de_naiss_C;

        return $this;
    }

    public function getSexeC(): ?string
    {
        return $this->sexeC;
    }

    public function setSexeC(string $sexeC): self
    {
        $this->sexeC = $sexeC;

        return $this;
    }

    public function getAdresseC(): ?string
    {
        return $this->adresseC;
    }

    public function setAdresseC(string $adresseC): self
    {
        $this->adresseC = $adresseC;

        return $this;
    }

    public function getTelephoneC(): ?int
    {
        return $this->telephoneC;
    }

    public function setTelephoneC(int $telephoneC): self
    {
        $this->telephoneC = $telephoneC;

        return $this;
    }

    public function getEmailC(): ?string
    {
        return $this->EmailC;
    }

    public function setEmailC(string $EmailC): self
    {
        $this->EmailC = $EmailC;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
  public function eraseCredentials()
  {

  }
  public function getSalt()
  {

  }
  public function getRoles()
  {
      return ['ROLE_USER'];
  }
    public function serialize()
  {
      return serilize([
          $this->id_client,
          $this->username,
          $this->EmailC,
          $this->password
      ]);
  }
  public function unserialize($string)
  {
      List (
          $this->id_client,
          $this->username,
          $this->EmailC,
          $this->password
          ) = $this->unserialize($string, ['allowed_classes'=>false]);
  }


}
