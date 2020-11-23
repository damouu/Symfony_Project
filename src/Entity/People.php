<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * People
 * @UniqueEntity(fields={"email"}, message="It look like your already have an account!")
 * @ORM\Table(name="people", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_28166a26e7927c74", columns={"email"})})
 * @ORM\Entity
 */
class People implements UserInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="people_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     * @Assert\Choice({"Ms", "Dr", "Miss", "Prof", "Mrs", "DDS"})
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @var string
     * @Assert\NotBlank
     * @Assert\Type(type="string")
     * @ORM\Column(name="first_name", type="string", length=255, nullable=false)
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @var string
     * @Assert\NotBlank
     * @Assert\Type(type="string")
     * @ORM\Column(name="last_name", type="string", length=255, nullable=false)
     */
    private $lastName;

    /**
     * @var int
     * @Assert\Positive(message="Please enter a number.")
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string|null
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     * @Assert\Email(message="Please enter a valid email address.")
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var json
     *
     * @ORM\Column(name="roles", type="json", nullable=true, options={"default": "[]"})
     */
    private $roles;

    public function getId(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return json|null
     */
    public function getRoles(): ?json
    {
        return $this->roles;
    }

    /**
     * @param json|null $roles
     */
    public function setRoles(?json $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=false)
     */
    private $lastName;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var json|null
     *
     * @ORM\Column(name="roles", type="json", nullable=true, options={"default"="[]"})
     */
    private $roles = '[]';


}
