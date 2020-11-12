<?php


namespace App\Form;

use App\Entity\People;
use App\Repository\PokemonMonstersRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

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
        $builder
            ->add('title', ChoiceType::class, [
                'choices' => [
                    'Ms' => 'Ms',
                    'Dr' => 'Dr',
                    'Miss' => 'Miss',
                    'Prof' => 'Prof',
                    'Mrs' => 'Mrs',
                    'DDS' => 'DDS',
                ]
            ])
            ->add('first_name', TextType::class, ['help' => 'please enter your first name'])
            ->add('last_name', TextType::class, ['help' => 'please enter your last name'])
            ->add('age', NumberType::class, ['help' => 'please enter your age'])
            ->add('email', EmailType::class, ['help' => 'please enter your email address'])
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'mapped' => false, //this indicates to the form that this is not a people's property
                'first_options' => array('label' => 'New password'),
                'second_options' => array('label' => 'Confirm new password'),
                'invalid_message' => 'The password fields must match.',
                'constraints' => [
                    new NotBlank([
                        'message' => 'This password has been leaked in a data breach, it must not be used. Please use another password.'
                    ]),
                    new Length([
                        'min' => 5,
                        'minMessage' => 'Enter a password longer thant this length'
                    ])
                ]
            ))
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'you must agree to our terms'
                    ])
                ]
            ])
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