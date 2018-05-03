<?php

namespace App\Controller;

use Doctrine\ORM\Mapping\PostRemove;
use http\Env\Request;
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
            $product->setTitle('window');
            $product->setPrice(20.50);
            $product->setActive(1);

            $product->setCategoryId($category);

            $entityManager = $this->getDoctrine()->getManager();
            //$entityManager->persist($category);
            $entityManager->persist($product);
            $entityManager->flush();

            return new Response('Product id '.$product->getId().'Category id '.$category->getId());
        }

    /**
     * @Route("/product/delete/{id}", name="delete")
     * @param $id
     * @return Response
     */
    public function delete($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Products::class)->find($id);
        $entityManager->remove($product);
        $entityManager->flush();

        return new Response('Deleted');
    }

    /**
     * @Route("/delete/{idd}", name="remove")
     * @ParamConverter("delete", options={"id" = "idd"})
     * @param Products $delete
     * @return Response
     */
    public function remove(Products $delete)
    {
        $del = $delete->getCategoryId();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($del);
        $entityManager->flush();

        return new Response('Deleted');

    }

}
