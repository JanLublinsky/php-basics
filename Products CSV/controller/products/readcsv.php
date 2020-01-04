<?php
include __DIR__ . '/classes/Product.php';
include __DIR__ . '/classes/ProductCollection.php';

$productCollection = new ProductCollection();

foreach (array_map('str_getcsv', file('products.csv')) as $product)
{
    $productCollection->add(
        new Product(
            $product[0],
            $product[1],
            $product[2]
        )
    );
}