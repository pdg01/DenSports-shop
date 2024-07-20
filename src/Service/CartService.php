<?php

namespace App\Service;

use App\Entity\Cart;
use App\Entity\CartItem;
use App\Entity\Product;
use Symfony\Component\Security\Core\Security;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartService
{
    /** @var Cart */
    private $cart;
    /** @var SessionInterface */
    private $session;

    /** @var EntityManagerInterface */
    private $entityManager;
    /** @var Security  */
    private $security;

    /**
     * @param EntityManagerInterface $entityManager
     * @param SessionInterface $session
     */
    public function __construct(EntityManagerInterface $entityManager, SessionInterface $session,Security $security)
    {
        $this->entityManager = $entityManager;
        $this->session = $session;
        $this->security = $security;
        $this->getCurrentCart();
    }

    public function getCart(): Cart
    {
        return $this->cart;
    }

    public function getCartCount()
    {
        $total = 0;
        foreach ($this->cart->getCartItems() as $cartItem){
            $total+=$cartItem->getQuantity();
        }

        return $total;
    }

    public function getCartItemTotal(CartItem $cartItem)
    {
        return $cartItem->getQuantity() * $cartItem->getProduct()->getPrice();

    }

    public function getPromoCartItemTotal(CartItem $cartItem)
    {
        if ($cartItem->getQuantity() >= 2) {
            return $this->getCartItemTotal($cartItem) * 0.9;
        }
        else
        {
            return $this->getCartItemTotal($cartItem);
        }
    }

    public function getCartTotal()
    {
        $total = 0;
        foreach ($this->getCart()->getCartItems() as $cartItem) {
            $total += $this->getPromoCartItemTotal($cartItem);
        }
        return $total;
    }

    public function getPromoCartTotal(){
        if($this->getCartTotal() >= 1500){
            return $this->getCartTotal() * 0.85;
        }
        else
        {
            return $this->getCartTotal();
        }
    }


    public function add(Product $product,$quantity=1){
        $cartItem = $this->getCartItemForProduct($product);
        if($cartItem){
            $cartItem->setQuantity($cartItem->getQuantity()+$quantity);
        }
        else{
            $cartItem = new CartItem();
            $cartItem->setProduct($product);
            $cartItem->setQuantity($quantity);
            $cartItem->setCart($this->cart);
        }
        $this->entityManager->persist($cartItem);
        $this->entityManager->flush();
    }
    public function update(Product $product,$quantity=1){
        $cartItem = $this->getCartItemForProduct($product);
        if($cartItem){
            $cartItem->setQuantity($quantity);
            $this->entityManager->persist($cartItem);
            $this->entityManager->flush();
        }

    }
    public function delete(Product $product){
        $cartItem = $this->getCartItemForProduct($product);
        $this->entityManager->remove($cartItem);
        $this->entityManager->flush();
    }
    public function empty(){
        foreach ($this->cart->getCartItems() as $cartItem) {
            $this->entityManager->remove($cartItem);
        }
        $this->entityManager->flush();
    }
    private function getCartItemForProduct(Product $product):?CartItem
    {
        foreach ($this->cart->getCartItems() as $cartItem) {
            if ($cartItem->getProduct()->getId() == $product->getId()) {
                return $cartItem;
            }
        }


        return null;
    }
    private function getCurrentCart()
    {
        if($this->session->has('cart_id')){
            $this->cart = $this->entityManager->getRepository(Cart::class)->find($this->session->get('cart_id'));
        }
        else{
            $this->cart = new Cart();
            $this->entityManager->persist($this->cart);
            $this->entityManager->flush();

            $this->session->set('cart_id',$this->cart->getId());
            return $this->cart;
        }
    }
}