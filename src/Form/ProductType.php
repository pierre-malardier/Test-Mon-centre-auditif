<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\ProductSav;
use App\Entity\LieuDeDepot;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Tapez votre nom']
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['placeholder' => 'Tapez votre prénom']
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => ['placeholder' => 'exemple@gmail.com']
            ])
            ->add('telephone', TelType::class, [
                'label' => 'Télephone',
                'attr' => ['placeholder' => '+33(0)788856629']
            ])
            ->add('nomDuProduit', TextType::class, [
                'label' => 'Nom du produit',
                'attr' => ['placeholder' => 'Tapez le nom du produit']
            ])
            ->add('categorie', EntityType::class, [
                'label' => 'Catégorie',
                'placeholder' => '--Choisissez une catégorie--',
                'class' => Categorie::class,
                'choice_label' => 'name'
            ])
            ->add('lieuDeDepot', EntityType::class, [
                'label' => 'Lieu de dépot',
                'placeholder' => '--Choisissez le lieu ou déposer le produit à réparer--',
                'class' => LieuDeDepot::class,
                'choice_label' => 'name'
            ])
            ->add('date', DateType::class, [
                'label' => 'Date du dépot'
            ])
            ->add('trancheHoraire', ChoiceType::class, [
                'label' => 'Tranche horaire',
                'placeholder' => '--Choisissez le créneau voulu--',
                'choices' => [
                    'matin' => 'matin',
                    'après-midi' => 'après-midi',
                    'soirée' => 'soirée'
                ]

            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProductSav::class,
        ]);
    }
}
