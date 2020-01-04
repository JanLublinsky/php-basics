<?php
ini_set('display_errors', 1);
// $_GET
// $_POST
// -----
// $_SERVER
// $_REQUEST
// $_ENV
// $_COOKIE
// $_SESSION
// ------

include __DIR__ . '/classes/Product.php';
include __DIR__ . '/classes/ProductCollection.php';

// Create CSV file
// FORMAT: id,name,price
// 1,apple,30
// 2,orange,50
// 3,banana,50

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
// { id: 1, name: apple, price: 30 }

header('Content-Type: application/json');

if (isset($_GET['id']))
{
    $product = $productCollection->getById((int) $_GET['id']);

    if ($product !== null)
    {
        echo json_encode($product->toArray());
    }
    return;
}

echo json_encode(['message' => 'Product not found.']);