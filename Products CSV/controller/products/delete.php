<?php

include "readcsv.php";

header('Content-Type: application/json');

if (isset($_GET['id']))
{
    $product = $productCollection->getById((int) $_GET['id']);

    if ($product !== null)
    {
        echo json_encode($product->toArray());
    }
    $productCollection->removeProduct($_GET['id']);
    $productsToCSVfile= fopen('products.csv', 'w');
    foreach ($productCollection->getProducts() as $product) {
        fputcsv($productsToCSVfile, $product->toArray());
    }
    fclose($productsToCSVfile);

    return;
}
echo json_encode(['message' => 'Product not found.']);