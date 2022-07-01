<?php

class Product {
    const SHOW_BY_DEFAULT = 10;

    /* 
     * Returns an array of products
    */
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT){
        $count = intval($count);

        $db = Db::getConnection();

        $productList = array();

        $result = $db->query("SELECT * FROM product WHERE status = '1' ORDER BY id DESC LIMIT $count");

        $i = 0;
        while($row = $result->fetch()){
            $productList[] = $row;
            $i++;
        }

        return $productList;
        
    }

    /* 
     * Returns an array of products
    */
    public static function getProductsListByCategory($categoryId = false, $page = 1){
        if($categoryId){
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();
            $products = array();
            $result = $db->query("SELECT * FROM product WHERE status = '1' AND category_id = '$categoryId' ORDER BY id ASC LIMIT ".self::SHOW_BY_DEFAULT." OFFSET $offset");
        
            $i = 0;
            while($row = $result->fetch()){
                $products[] = $row;
                $i++;
            }
            return $products;
        }
    }

    public static function getProductById($id){
        $id = intval($id);

        if($id) {
            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM product WHERE id = $id");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    public static function getTotalProductsInCategory($categoryId){
        $db = Db::getConnection();

        $result = $db->query("SELECT COUNT(id) AS count FROM product WHERE status='1' AND category_id='$categoryId'");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }

    public static function getProductsByIds($idsArray){
        $db = Db::getConnection();
        $idsString = implode(', ', $idsArray);

        $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";

        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $products = array();
        while($row = $result->fetch()){
            $products[] = $row;
        }

        return $products;
    }
}