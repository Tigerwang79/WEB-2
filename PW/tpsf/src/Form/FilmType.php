<?php

namespace App\Form;

use App\Entity\Film;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, ['label' => 'titre du film', 'attr' => ['placeholder' => 'titre']])
            ->add('annee', IntegerType::class, ['label' => 'année de sortie'])
            ->add('enstock', ChoiceType::class, ['label' => 'en stock ?', 'choices' => ['oui' => true, 'non' => false], 'expanded' => false])
            ->add('prix', NumberType::class, ['label' => 'prix d\'achat'])
            ->add('quantite', IntegerType::class, ['label' => 'quantité en stock'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Film::class,
        ]);
    }
}
