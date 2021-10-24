<?php

namespace App\Controller;

use App\Entity\ProductSav;
use App\Form\ProductType;
use App\Repository\ProductSavRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class SavFormController extends AbstractController
{

    /**
     * @Route("/", name="sav_form")
     */
    public function create(Request $request, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {

        $form = $this->createForm(ProductType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $product_sav = $form->getData();
            $em->persist($product_sav);
            $em->flush();

            return $this->redirectToRoute('product_validate', [
                'id' => $product_sav->getId()
            ]);
        }


        $formView = $form->createView();

        return $this->render('sav_form/index.html.twig', [
            'formView' => $formView
        ]);
    }
    /**
     * @Route("/productSav/{id}", name="product_validate")
     */
    public function validate($id, ProductSavRepository $productSavRepository)
    {
        $product_sav = $productSavRepository->find($id);

        return $this->render('sav_form/product_sav.html.twig', [
            'product_sav' => $product_sav
        ]);
    }
}
