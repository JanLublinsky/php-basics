<?php

class ProductCollection
{
    private $products = [];

    public function add(Product $product)
    {
        $this->products [$product->id()] = $product;
    }

    public function getById(int $id): ?Product
    {
        return $this->products[$id] ?? null;
    }
    public function getProducts()
    {
        return $this->products;
    }
    public function removeProduct($index)
    {
        unset($this->products[$index]);
        array_values($this->products);
    }

}