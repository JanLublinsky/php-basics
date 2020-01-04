<?php
include "readcsv.php";
$id = $_GET['id'] ?? null;
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
