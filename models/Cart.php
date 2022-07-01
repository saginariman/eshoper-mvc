<?php

class Cart {
    public static function addProduct($id){
        $id = intval($id);
        $productInCart = array();

        if(isset($_SESSION['products'])){
            $productInCart = $_SESSION['products'];
        }

        if(array_key_exists($id, $productInCart)){
            $productInCart[$id] ++;
        }else{
            $productInCart[$id] = 1;
        }

        $_SESSION['products'] = $productInCart;
        return self::countItems();
    }

    public static function countItems(){
        if(isset($_SESSION['products'])) {
            $count = 0;
            foreach($_SESSION['products'] as $id => $quatity){
                $count = $count + $quatity;
            }
            return $count;
        }else{
            return 0;
        }
    }

    public static function getProducts(){
        if(isset($_SESSION['products'])){
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getTotalPrice($products){
        $productsInCart = self::getProducts();
        if($productsInCart) {
            $total = 0;
            foreach($products as $item){
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }
        return $total;
    }
}