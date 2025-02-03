<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\Cursus;
use App\Entity\Lesson;
use App\Repository\CartRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'app_cart')]
    public function index(EntityManagerInterface $em, CartRepository $cartRepository): Response
    {
        $user = $this->getUser();

        $cartItems = $em->getRepository(Cart::class)->findBy([
            'user' => $user,
        ]);

        return $this->render('cart/index.html.twig', [
            'cartItems' => $cartItems,
        ]);
    }


    #[Route('/cart/add',name:'add_cart')]
    public function addToCart(Request $request, EntityManagerInterface $em, Security $security): Response
    {
        //Check if user is connected
        $user = $security->getUser();
            //Redirect if user is not connected
            if(!$user){
                return $this->redirectToRoute('app_login');
            }

        //Get settings from request (id_cursus ou id_lesson)
        $cursusId = $request ->get('id_cursus');
        $lessonId = $request -> get('id_lesson');

        //Search for entities in Database
        $cursus = $cursusId ? $em -> getRepository(Cursus::class)->find($cursusId): null;
        $lesson = $lessonId ? $em -> getRepository(Lesson::class)->find($lessonId): null;
       

        //Check if item already in cart
        $cartItem = $em->getRepository(Cart::class)->findOneBy([
            'user' => $user,
            'cursus' => $cursus,
            'lesson' => $lesson,
        ]);
            //Display error message if item already in cart
            if($cartItem){
                $this->addFlash('error', 'Cet élèment est deja dans votre panier.');
                return $this->redirectToRoute('app_formation');
            }
        
        //Put new item in cart
        $cartItem = new Cart();
        $cartItem -> setUser($user)
                  ->setCursus($cursus)
                  ->setLesson($lesson)
                  ->setCreatedAt(new \DateTimeImmutable());
        //Save new item
        try {
            $em->persist($cartItem);
            $em->flush();
        } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
            $this->addFlash('error', 'Cet élément est déjà dans votre panier.');
            return $this->redirectToRoute('cart_index');
        }

        return $this->redirectToRoute('app_cart');
    }

    #[Route('cart/remove/{id_cart}', name:'remove_cart_item', methods:['POST'])]
    public function removeCartItem(int $id_cart, EntityManagerInterface $em, Security $security):Response
    {   
        //Get connected user
        $user = $security->getUser();
        if(!$user){
            $this->addFlash('error', 'Vous devez vous connecter pour effectuer cette action !');
            return $this->redirectToRoute('app_login');
        }

        $cartItem = $em->getRepository(Cart::class)->find($id_cart);
        //Delete item in cart
        $em->remove($cartItem);
        $em->flush();
        $this->addFlash('success', 'L\'élément à bien était supprimer de votre panier!');

        return $this->redirectToRoute('app_cart');
    }
}
