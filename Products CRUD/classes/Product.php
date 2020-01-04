<?php

class Product
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $price;
    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var int|null
     */
    private $id;

    public function __construct(
        string $name,
        int $price,
        int $amount,
        string $createdAt,
        ?int $id = null
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
        $this->createdAt = $createdAt;
        $this->id = $id;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function formattedPrice(): string
    {
        return '$' . number_format($this->price() / 100,2,".",' ');
    }

    public function price(): int
    {
        return $this->price;
    }

    public function amount(): int
    {
        return $this->amount;
    }

    public function createdAt(): string
    {
        return $this->createdAt;
    }
}