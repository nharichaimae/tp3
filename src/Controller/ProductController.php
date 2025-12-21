<?php

namespace App\Controller;

use App\Form\Type\AddToCartType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'product_show')]
    public function show(Request $request): Response
    {
        $form = $this->createForm(AddToCartType::class);
        $form->handleRequest($request);

      

        return $this->render('product/show.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
