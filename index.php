<?php

require_once "./vendor/autoload.php";

$product = new \App\Model\Product();
$product->setName("");
$product->setDescription("");
// $product->setId(15);

$productDAO = new \App\Model\ProductDAO();
// $productDAO->create($product);
$productDAO->update($product);
$productDAO->read();

foreach ($productDAO->read() as $product):
    echo $product["name"] . "<br>";
    echo $product["description"] . "<br>" . "<hr>";
endforeach;
$productDAO->delete(15);