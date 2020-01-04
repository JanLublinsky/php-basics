<?php
include "readcsv.php";

header('Content-Type: application/json');

if (count($productCollection->getProducts()) > 1) {
    $json = [];
    foreach ($productCollection->getProducts() as $key => $product) {
        if ($product !== null) {
            $json[$key] = $product->toArray();
        }
    }
    echo json_encode($json);
    return;
}
echo json_encode(['message' => 'Products list is empty.']);
