<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\LieuDeDepot;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SavFormController extends AbstractController
{

    /**
     * @Route("/", name="sav_form")
     */
    public function index(FormFactoryInterface $factory): Response
    {
        $builder = $factory->createBuilder();

        $builder->add('name', TextType::class, [
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

        $form = $builder->getForm();

        $formView = $form->createView();

        return $this->render('sav_form/index.html.twig', [
            'controller_name' => 'SavFormController',
            'formView' => $formView
        ]);
    }
}
