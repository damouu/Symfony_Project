<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemon
 *
 * @ORM\Table(name="pokemon", uniqueConstraints={@ORM\UniqueConstraint(name="pokemon_data_pk", columns={"pokedex_number"})})
 * @ORM\Entity
 */
class Pokemon
{
    /**
     * @var string
     *
     * @ORM\Column(name="pokedex_number", type="decimal", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pokemon_data_pokedex_number_seq", allocationSize=1, initialValue=1)
     */
    private $pokedexNumber;

    /**
     * @return string
     */
    public function getPokedexNumber(): string
    {
        return $this->pokedexNumber;
    }

    /**
     * @param string $pokedexNumber
     */
    public function setPokedexNumber(string $pokedexNumber): void
    {
        $this->pokedexNumber = $pokedexNumber;
    }

    /**
     * @return string|null
     */
    public function getAbilities(): ?string
    {
        return $this->abilities;
    }

    /**
     * @param string|null $abilities
     */
    public function setAbilities(?string $abilities): void
    {
        $this->abilities = $abilities;
    }

    /**
     * @return string|null
     */
    public function getAgainstBug(): ?string
    {
        return $this->againstBug;
    }

    /**
     * @param string|null $againstBug
     */
    public function setAgainstBug(?string $againstBug): void
    {
        $this->againstBug = $againstBug;
    }

    /**
     * @return string|null
     */
    public function getAgainstDark(): ?string
    {
        return $this->againstDark;
    }

    /**
     * @param string|null $againstDark
     */
    public function setAgainstDark(?string $againstDark): void
    {
        $this->againstDark = $againstDark;
    }

    /**
     * @return string|null
     */
    public function getAgainstDragon(): ?string
    {
        return $this->againstDragon;
    }

    /**
     * @param string|null $againstDragon
     */
    public function setAgainstDragon(?string $againstDragon): void
    {
        $this->againstDragon = $againstDragon;
    }

    /**
     * @return string|null
     */
    public function getAgainstElectric(): ?string
    {
        return $this->againstElectric;
    }

    /**
     * @param string|null $againstElectric
     */
    public function setAgainstElectric(?string $againstElectric): void
    {
        $this->againstElectric = $againstElectric;
    }

    /**
     * @return string|null
     */
    public function getAgainstFairy(): ?string
    {
        return $this->againstFairy;
    }

    /**
     * @param string|null $againstFairy
     */
    public function setAgainstFairy(?string $againstFairy): void
    {
        $this->againstFairy = $againstFairy;
    }

    /**
     * @return string|null
     */
    public function getAgainstFight(): ?string
    {
        return $this->againstFight;
    }

    /**
     * @param string|null $againstFight
     */
    public function setAgainstFight(?string $againstFight): void
    {
        $this->againstFight = $againstFight;
    }

    /**
     * @return string|null
     */
    public function getAgainstFire(): ?string
    {
        return $this->againstFire;
    }

    /**
     * @param string|null $againstFire
     */
    public function setAgainstFire(?string $againstFire): void
    {
        $this->againstFire = $againstFire;
    }

    /**
     * @return string|null
     */
    public function getAgainstFlying(): ?string
    {
        return $this->againstFlying;
    }

    /**
     * @param string|null $againstFlying
     */
    public function setAgainstFlying(?string $againstFlying): void
    {
        $this->againstFlying = $againstFlying;
    }

    /**
     * @return string|null
     */
    public function getAgainstGhost(): ?string
    {
        return $this->againstGhost;
    }

    /**
     * @param string|null $againstGhost
     */
    public function setAgainstGhost(?string $againstGhost): void
    {
        $this->againstGhost = $againstGhost;
    }

    /**
     * @return string|null
     */
    public function getAgainstGrass(): ?string
    {
        return $this->againstGrass;
    }

    /**
     * @param string|null $againstGrass
     */
    public function setAgainstGrass(?string $againstGrass): void
    {
        $this->againstGrass = $againstGrass;
    }

    /**
     * @return string|null
     */
    public function getAgainstGround(): ?string
    {
        return $this->againstGround;
    }

    /**
     * @param string|null $againstGround
     */
    public function setAgainstGround(?string $againstGround): void
    {
        $this->againstGround = $againstGround;
    }

    /**
     * @return string|null
     */
    public function getAgainstIce(): ?string
    {
        return $this->againstIce;
    }

    /**
     * @param string|null $againstIce
     */
    public function setAgainstIce(?string $againstIce): void
    {
        $this->againstIce = $againstIce;
    }

    /**
     * @return string|null
     */
    public function getAgainstNormal(): ?string
    {
        return $this->againstNormal;
    }

    /**
     * @param string|null $againstNormal
     */
    public function setAgainstNormal(?string $againstNormal): void
    {
        $this->againstNormal = $againstNormal;
    }

    /**
     * @return string|null
     */
    public function getAgainstPoison(): ?string
    {
        return $this->againstPoison;
    }

    /**
     * @param string|null $againstPoison
     */
    public function setAgainstPoison(?string $againstPoison): void
    {
        $this->againstPoison = $againstPoison;
    }

    /**
     * @return string|null
     */
    public function getAgainstPsychic(): ?string
    {
        return $this->againstPsychic;
    }

    /**
     * @param string|null $againstPsychic
     */
    public function setAgainstPsychic(?string $againstPsychic): void
    {
        $this->againstPsychic = $againstPsychic;
    }

    /**
     * @return string|null
     */
    public function getAgainstRock(): ?string
    {
        return $this->againstRock;
    }

    /**
     * @param string|null $againstRock
     */
    public function setAgainstRock(?string $againstRock): void
    {
        $this->againstRock = $againstRock;
    }

    /**
     * @return string|null
     */
    public function getAgainstSteel(): ?string
    {
        return $this->againstSteel;
    }

    /**
     * @param string|null $againstSteel
     */
    public function setAgainstSteel(?string $againstSteel): void
    {
        $this->againstSteel = $againstSteel;
    }

    /**
     * @return string|null
     */
    public function getAgainstWater(): ?string
    {
        return $this->againstWater;
    }

    /**
     * @param string|null $againstWater
     */
    public function setAgainstWater(?string $againstWater): void
    {
        $this->againstWater = $againstWater;
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
    public function getBaseEggSteps(): ?string
    {
        return $this->baseEggSteps;
    }

    /**
     * @param string|null $baseEggSteps
     */
    public function setBaseEggSteps(?string $baseEggSteps): void
    {
        $this->baseEggSteps = $baseEggSteps;
    }

    /**
     * @return string|null
     */
    public function getBaseHappiness(): ?string
    {
        return $this->baseHappiness;
    }

    /**
     * @param string|null $baseHappiness
     */
    public function setBaseHappiness(?string $baseHappiness): void
    {
        $this->baseHappiness = $baseHappiness;
    }

    /**
     * @return string|null
     */
    public function getBaseTotal(): ?string
    {
        return $this->baseTotal;
    }

    /**
     * @param string|null $baseTotal
     */
    public function setBaseTotal(?string $baseTotal): void
    {
        $this->baseTotal = $baseTotal;
    }

    /**
     * @return string|null
     */
    public function getCaptureRate(): ?string
    {
        return $this->captureRate;
    }

    /**
     * @param string|null $captureRate
     */
    public function setCaptureRate(?string $captureRate): void
    {
        $this->captureRate = $captureRate;
    }

    /**
     * @return string|null
     */
    public function getClassfication(): ?string
    {
        return $this->classfication;
    }

    /**
     * @param string|null $classfication
     */
    public function setClassfication(?string $classfication): void
    {
        $this->classfication = $classfication;
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
    public function getExperienceGrowth(): ?string
    {
        return $this->experienceGrowth;
    }

    /**
     * @param string|null $experienceGrowth
     */
    public function setExperienceGrowth(?string $experienceGrowth): void
    {
        $this->experienceGrowth = $experienceGrowth;
    }

    /**
     * @return string|null
     */
    public function getHeightM(): ?string
    {
        return $this->heightM;
    }

    /**
     * @param string|null $heightM
     */
    public function setHeightM(?string $heightM): void
    {
        $this->heightM = $heightM;
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
    public function getJapaneseName(): ?string
    {
        return $this->japaneseName;
    }

    /**
     * @param string|null $japaneseName
     */
    public function setJapaneseName(?string $japaneseName): void
    {
        $this->japaneseName = $japaneseName;
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
    public function getPercentageMale(): ?string
    {
        return $this->percentageMale;
    }

    /**
     * @param string|null $percentageMale
     */
    public function setPercentageMale(?string $percentageMale): void
    {
        $this->percentageMale = $percentageMale;
    }

    /**
     * @return string|null
     */
    public function getSpAttack(): ?string
    {
        return $this->spAttack;
    }

    /**
     * @param string|null $spAttack
     */
    public function setSpAttack(?string $spAttack): void
    {
        $this->spAttack = $spAttack;
    }

    /**
     * @return string|null
     */
    public function getSpDefense(): ?string
    {
        return $this->spDefense;
    }

    /**
     * @param string|null $spDefense
     */
    public function setSpDefense(?string $spDefense): void
    {
        $this->spDefense = $spDefense;
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
    public function getWeightKg(): ?string
    {
        return $this->weightKg;
    }

    /**
     * @param string|null $weightKg
     */
    public function setWeightKg(?string $weightKg): void
    {
        $this->weightKg = $weightKg;
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
    public function getIsLegendary(): ?bool
    {
        return $this->isLegendary;
    }

    /**
     * @param bool|null $isLegendary
     */
    public function setIsLegendary(?bool $isLegendary): void
    {
        $this->isLegendary = $isLegendary;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="abilities", type="string", nullable=true)
     */
    private ?string $abilities;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_bug", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstBug;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_dark", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstDark;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_dragon", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstDragon;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_electric", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstElectric;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_fairy", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstFairy;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_fight", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstFight;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_fire", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstFire;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_flying", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstFlying;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_ghost", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstGhost;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_grass", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstGrass;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_ground", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstGround;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_ice", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstIce;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_normal", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstNormal;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_poison", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstPoison;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_psychic", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstPsychic;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_rock", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstRock;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_steel", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstSteel;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="against_water", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $againstWater;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="attack", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $attack;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="base_egg_steps", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $baseEggSteps;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="base_happiness", type="decimal", precision=10, scale=0, nullable=true)
     */
    private ?int $baseHappiness;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="base_total", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $baseTotal;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="capture_rate", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $captureRate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="classfication", type="string", nullable=true)
     */
    private ?string $classfication;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="defense", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $defense;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="experience_growth", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $experienceGrowth;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="height_m", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $heightM;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="hp", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $hp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="japanese_name", type="string", nullable=true)
     */
    private ?string $japaneseName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", nullable=true)
     */
    private ?string $name;

    /**
     * @var float|null
     *
     * @ORM\Column(name="percentage_male", type="float", precision=10, scale=0, nullable=true)
     */
    private ?float $percentageMale;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="sp_attack", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $spAttack;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="sp_defense", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $spDefense;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="speed", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $speed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_one", type="string", nullable=true)
     */
    private ?string $typeOne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_two", type="string", nullable=true)
     */
    private ?string $typeTwo;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="weight_kg", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $weightKg;

    /**
     * @var integer|null
     *
     * @ORM\Column(name="generation", type="integer", precision=10, scale=0, nullable=true)
     */
    private ?int $generation;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_legendary", type="boolean", nullable=true)
     */
    private ?bool $isLegendary;


}
