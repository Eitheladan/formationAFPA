<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 * @UniqueEntity(
 * fields={"username"},
 * message="Le user existe déjà"
 * )
 */
class Utilisateur implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=5,max=10,minMessage="il faut plus de 5 carac",maxMessage="il faut moins de 10 carac")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=5,max=10,minMessage="il faut plus de 5 carac",maxMessage="il faut moins de 10 carac")
     */
    private $password;

    /**
     * @Assert\Length(min=5,max=10,minMessage="il faut plus de 5 carac",maxMessage="il faut moins de 10 carac")
     * @Assert\EqualTo(propertyPath="password",message="Les MDP ne sont pas équivalents")
     */
    private $verificationPassword;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getVerificationPassword(): ?string
    {
        return $this->verificationPassword;
    }

    public function setVerificationPassword(string $verificationPassword)
    {
        $this->verificationPassword = $verificationPassword;
        return $this;
    }

    public function getSalt()
    {
    }
    public function getUserIdentifier()
    {
        return $this->getUserIdentifier();
    }
    public function getRoles()
    {
    }
    public function eraseCredentials()
    {
    }
}
