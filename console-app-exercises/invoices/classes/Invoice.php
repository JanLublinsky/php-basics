<?php

class Invoice
{

    /**
     * @var string
     */
    private $country;
    /**
     * @var int
     */
    private $includingTax;
    /**
     * @var int
     */
    private $excludingTax;
    /**
     * @var int
     */
    private $tax;

    public function __construct(string $country, int $includingTax, int $excludingTax, int $tax)
    {

        $this->country = $country;
        $this->includingTax = $includingTax;
        $this->excludingTax = $excludingTax;
        $this->tax = $tax;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getIncludingTax(): int
    {
        return $this->includingTax;
    }

    public function getExcludingTax(): int
    {
        return $this->excludingTax;
    }

    public function getTax(): int
    {
        return $this->tax;
    }

    public function toArray(): array
    {
        return [
            'country' => $this->getCountry(),
            'includingTax' => $this->getIncludingTax(),
            'excludingTax' => $this->getExcludingTax(),
            'tax' => $this->getTax(),
        ];
    }
}