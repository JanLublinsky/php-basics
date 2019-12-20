<?php

class Product
{
    private $name;
    private $price_at_start;
    private $amount_at_start;

    public function __construct(string $name, float $price_at_start, int $amount_at_start)
    {
        $this->name = $name;
        $this->price_at_start = $price_at_start;
        $this->amount_at_start = $amount_at_start;
    }

    public function printProduct()
    {
        echo $this->name . ', price ' . $this->price_at_start . ', amount ' . $this->amount_at_start . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price_at_start;
    }

    public function getAmount()
    {
        return $this->amount_at_start;
    }

    public function changeQuantity($amount_after)
    {
        $this->amount_at_start = $amount_after;
    }

    public function changePrice($price_after)
    {
        $this->price_at_start = $price_after;
    }
}

$milk = new Product('Milk', 1.20, 20);
$milk->printProduct();
echo "\n";

class Gadget
{
    public static function main()
    {
        $logitech = new Product('Logitech mouse', 70.00, 14);
        $iphone = new Product('iPhone 5s', 999.99, 3);
        $epson = new Product('Epson EB-U05', 440.46, 1);

        echo "::Initial state::\n\n";
        $products = [$logitech, $iphone, $epson];
        foreach ($products as $product) {
            echo $product->getName() . ', ' . number_format($product->getPrice(), 2, '.', '')
                . ' EUR, ' . $product->getAmount() . " units" . PHP_EOL;
        }
        echo "\n";
        $logitech->changePrice(59.99);
        $iphone->changeQuantity(2);
        $epson->changeQuantity(5);
        echo "::After change Price || Quantity::\n\n";
        $products = [$logitech, $iphone, $epson];
        foreach ($products as $product) {
            echo $product->getName() . ', ' . number_format($product->getPrice(), 2, '.', '')
                . ' EUR, ' . $product->getAmount() . " units" . PHP_EOL;
        }
    }

}

Gadget::main();
