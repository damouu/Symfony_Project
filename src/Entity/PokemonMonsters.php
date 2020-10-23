<?php

namespace App\Entity;

use App\Repository\PokemonMonstersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PokemonMonstersRepository::class)
 */
class PokemonMonsters
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="integer")
     */
    private $hp;

    /**
     * @ORM\Column(type="integer")
     */
    private $attack;

    /**
     * @ORM\Column(type="integer")
     */
    private $defense;

    /**
     * @ORM\Column(type="integer")
     */
    private $speed;

    /**
     * @ORM\Column(type="integer")
     */
    private $special;

    /**
     * @ORM\Column(type="integer")
     */
    private $special_attack;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $special_defense;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getHp(): ?int
    {
        return $this->hp;
    }

    public function setHp(int $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getAttack(): ?int
    {
        return $this->attack;
    }

    public function setAttack(int $attack): self
    {
        $this->attack = $attack;

        return $this;
    }

    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): self
    {
        $this->defense = $defense;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getSpecial(): ?int
    {
        return $this->special;
    }

    public function setSpecial(int $special): self
    {
        $this->special = $special;

        return $this;
    }

    public function getSpecialAttack(): ?int
    {
        return $this->special_attack;
    }

    public function setSpecialAttack(int $special_attack): self
    {
        $this->special_attack = $special_attack;

        return $this;
    }

    public function getSpecialDefense(): ?int
    {
        return $this->special_defense;
    }

    public function setSpecialDefense(?int $special_defense): self
    {
        $this->special_defense = $special_defense;

        return $this;
    }
}
