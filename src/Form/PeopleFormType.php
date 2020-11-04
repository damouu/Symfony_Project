<?php


namespace App\Form;


use App\Entity\People;
use App\Entity\PokemonMonsters;
use App\Repository\PokemonMonstersRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PeopleFormType extends AbstractType
{
    /**
     * @var PokemonMonstersRepository
     */
    private $pokemonMonstersRepository;

    /**
     * PeopleFormType constructor.
     * @param PokemonMonstersRepository $pokemonMonstersRepository
     */
    public function __construct(PokemonMonstersRepository $pokemonMonstersRepository)
    {
        $this->pokemonMonstersRepository = $pokemonMonstersRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, ['label' => 'tu puta madre', 'help' => 'go fuck yourself'])
            ->add('first_name', TextType::class, ['label' => 'sanity validation', 'invalid_message' => 'quee nooo weyyy esta malo!!'])
            ->add('last_name')
            ->add('age')
            //->add('pokemon', EntityType::class, ['class' => PokemonMonsters::class, 'choice_label' => 'id', 'placeholder' => 'choose a fucking pokemon!'])
            /*->add('gay', ChoiceType::class, ['placeholder' => 'is u gay?', 'choices' => [
                'no' => true,
                'noooooo' => false,
                'starff' => false
            ]]);*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => People::class
        ]);
    }

}