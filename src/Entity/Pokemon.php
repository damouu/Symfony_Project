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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getTypeOne(): ?string
    {
        return $this->typeOne;
    }

    /**
     * @param string|null $typeOne
     */
    public function setTypeOne(?string $typeOne): void
    {
        $this->typeOne = $typeOne;
    }

    /**
     * @return string|null
     */
    public function getTypeTwo(): ?string
    {
        return $this->typeTwo;
    }

    /**
     * @param string|null $typeTwo
     */
    public function setTypeTwo(?string $typeTwo): void
    {
        $this->typeTwo = $typeTwo;
    }

    /**
     * @return string|null
     */
    public function getTotal(): ?string
    {
        return $this->total;
    }

    /**
     * @param string|null $total
     */
    public function setTotal(?string $total): void
    {
        $this->total = $total;
    }

    /**
     * @return string|null
     */
    public function getHp(): ?string
    {
        return $this->hp;
    }

    /**
     * @param string|null $hp
     */
    public function setHp(?string $hp): void
    {
        $this->hp = $hp;
    }

    /**
     * @return string|null
     */
    public function getAttack(): ?string
    {
        return $this->attack;
    }

    /**
     * @param string|null $attack
     */
    public function setAttack(?string $attack): void
    {
        $this->attack = $attack;
    }

    /**
     * @return string|null
     */
    public function getDefense(): ?string
    {
        return $this->defense;
    }

    /**
     * @param string|null $defense
     */
    public function setDefense(?string $defense): void
    {
        $this->defense = $defense;
    }

    /**
     * @return string|null
     */
    public function getSpecialAttack(): ?string
    {
        return $this->specialAttack;
    }

    /**
     * @param string|null $specialAttack
     */
    public function setSpecialAttack(?string $specialAttack): void
    {
        $this->specialAttack = $specialAttack;
    }

    /**
     * @return string|null
     */
    public function getSpecialDefense(): ?string
    {
        return $this->specialDefense;
    }

    /**
     * @param string|null $specialDefense
     */
    public function setSpecialDefense(?string $specialDefense): void
    {
        $this->specialDefense = $specialDefense;
    }

    /**
     * @return string|null
     */
    public function getSpeed(): ?string
    {
        return $this->speed;
    }

    /**
     * @param string|null $speed
     */
    public function setSpeed(?string $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return string|null
     */
    public function getGeneration(): ?string
    {
        return $this->generation;
    }

    /**
     * @param string|null $generation
     */
    public function setGeneration(?string $generation): void
    {
        $this->generation = $generation;
    }

    /**
     * @return bool|null
     */
    public function getLegendary(): ?bool
    {
        return $this->legendary;
    }

    /**
     * @param bool|null $legendary
     */
    public function setLegendary(?bool $legendary): void
    {
        $this->legendary = $legendary;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_one", type="string", length=255, nullable=true)
     */
    private $typeOne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_two", type="string", length=255, nullable=true)
     */
    private $typeTwo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total", type="decimal", precision=10, scale=0, nullable=true)
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
     * @ORM\Column(name="attack", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $attack;

    /**
     * @var string|null
     *
     * @ORM\Column(name="defense", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $defense;

    /**
     * @var string|null
     *
     * @ORM\Column(name="special_attack", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $specialAttack;

    /**
     * @var string|null
     *
     * @ORM\Column(name="special_defense", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $specialDefense;

    /**
     * @var string|null
     *
     * @ORM\Column(name="speed", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $speed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="generation", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $generation;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="legendary", type="boolean", nullable=true)
     */
    private $legendary;


}
