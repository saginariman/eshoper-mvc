<?php 
// FRONT CONTROLLER

// 1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
/* 
 * print_r(dirname(__FILE__)); //C:\OSPanel\domains\eshoper-mvc
 * echo '<br>';
 * print_r($_SERVER['DOCUMENT_ROOT']); //C:/OSPanel/domains/eshoper-mvc 
*/
require_once(ROOT . '/components/Autoload.php');

// 4. Вызов Router
$router = new Router();
$router->run();