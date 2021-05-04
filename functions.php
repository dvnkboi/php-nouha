<?php 

namespace mobileshop;

require_once './database/DBController.php';
$db = new DBController();

require_once './database/Product.php';

$product = new Product($db);

$products = $product->getProducts();
