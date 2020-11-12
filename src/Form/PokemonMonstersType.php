<?php

namespace App\Form;

use App\Entity\PokemonMonsters;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PokemonMonstersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name')
            ->add('hp')
            ->add('attack')
            ->add('defense')
            ->add('speed')
            ->add('special')
            ->add('special_attack')
            ->add('special_defense')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PokemonMonsters::class,
        ]);
    }
}
