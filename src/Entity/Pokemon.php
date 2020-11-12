<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemon
 *
 * @ORM\Table(name="pokemon", uniqueConstraints={@ORM\UniqueConstraint(name="pokemon_id_uindex", columns={"id"})})
 * @ORM\Entity
 */
class Pokemon
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pokemon_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name", type="string", nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Type 1 ", type="string", nullable=true)
     */
    private $type1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Type 2 ", type="string", nullable=true)
     */
    private $type2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Total", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $total;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hp", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $hp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Attack", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $attack;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Defense", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $defense;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Special Attack", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $specialAttack;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Special Defense", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $specialDefense;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Speed", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $speed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Generation", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $generation;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Legendary", type="boolean", nullable=true)
     */
    private $legendary;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType1(): ?string
    {
        return $this->type1;
    }

    public function setType1(?string $type1): self
    {
        $this->type1 = $type1;

        return $this;
    }

    public function getType2(): ?string
    {
        return $this->type2;
    }

    public function setType2(?string $type2): self
    {
        $this->type2 = $type2;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(?string $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getHp(): ?string
    {
        return $this->hp;
    }

    public function setHp(?string $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getAttack(): ?string
    {
        return $this->attack;
    }

    public function setAttack(?string $attack): self
    {
        $this->attack = $attack;

        return $this;
    }

    public function getDefense(): ?string
    {
        return $this->defense;
    }

    public function setDefense(?string $defense): self
    {
        $this->defense = $defense;

        return $this;
    }

    public function getSpecialAttack(): ?string
    {
        return $this->specialAttack;
    }

    public function setSpecialAttack(?string $specialAttack): self
    {
        $this->specialAttack = $specialAttack;

        return $this;
    }

    public function getSpecialDefense(): ?string
    {
        return $this->specialDefense;
    }

    public function setSpecialDefense(?string $specialDefense): self
    {
        $this->specialDefense = $specialDefense;

        return $this;
    }

    public function getSpeed(): ?string
    {
        return $this->speed;
    }

    public function setSpeed(?string $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getGeneration(): ?string
    {
        return $this->generation;
    }

    public function setGeneration(?string $generation): self
    {
        $this->generation = $generation;

        return $this;
    }

    public function getLegendary(): ?bool
    {
        return $this->legendary;
    }

    public function setLegendary(?bool $legendary): self
    {
        $this->legendary = $legendary;

        return $this;
    }


}
