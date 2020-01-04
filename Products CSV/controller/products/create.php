<?php

include "readcsv.php";
$product=new Product($_GET['id'], $_GET['name'], $_GET['price']);
$productCollection->add($product);
$productsToCSVfile= fopen('products.csv', 'w');
foreach ($productCollection->getProducts() as $product) {
    fputcsv($productsToCSVfile, $product->toArray());
}
fclose($productsToCSVfile);
header('Content-Type: application/json');
echo json_encode($product->toArray());