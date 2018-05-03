<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Categories;
use App\Entity\Products;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
        /**
         * @Route("/product", name="product")
         */
        public function index()
        {
            $category = new Categories();
            $category->setTitle('bus');

            $product = new Products();
            $product->setTitle('wheel');
            $product->setPrice(20.50);
            $product->setActive(0);

            $product->setCategoryId($category);

            $entityManager = $this->getDoctrine()->getManager();
            //$entityManager->persist($category);
            $entityManager->persist($product);
            $entityManager->flush();

            return new Response('Product id '.$product->getId().'Category_id '.$category->getId());
        }

    /**
     * @Route("/product/delete/{id}", name="delete")
     */
    public function delete($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Products::class)->find($id);
        $entityManager->remove($product);
        $entityManager->flush();

        return new Response('Deleted');
    }

}
