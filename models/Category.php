<?php
include_once(ROOT . '/components/Db.php');

class Category {
    /* 
     * Return an array of categories
    */
    public static function getCategoriesList(){
        $db = Db::getConnection();
        $categoryList = array();

        $result = $db->query('SELECT * FROM category ORDER BY sort_order ASC');

        $i = 0;
        while($row = $result->fetch()){
            $categoryList[] = $row;
            $i++;
        }

        return $categoryList;
    }
}