<?php


namespace App\Form;

use App\Entity\People;
use App\Repository\PokemonMonstersRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
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
        $builder->add('title', ChoiceType::class, ['choices' => ['Ms' => false, "Mrs" => null, "Mr" => true]])
            ->add('first_name', TextType::class, ['help' => 'please enter your first name'])
            ->add('last_name', TextType::class, ['help' => 'please enter your last name'])
            ->add('age', NumberType::class, ['help' => 'please enter your age'])
            ->add('email', EmailType::class, ['help' => 'please enter your email address'])
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'mapped' => false, //
                'first_options' => array('label' => 'New password'),
                'second_options' => array('label' => 'Confirm new password'),
                'invalid_message' => 'The password fields must match.',
            ))
            //->add('pokemon', EntityType::class, ['class' => PokemonMonsters::class, 'choice_label' => 'id', 'placeholder' => 'choose a fucking pokemon!'])
            /*->add('gay', ChoiceType::class, ['placeholder' => 'is u gay?', 'choices' => [
                'no' => true,
                'noo' => false,
                'hell_no' => false
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