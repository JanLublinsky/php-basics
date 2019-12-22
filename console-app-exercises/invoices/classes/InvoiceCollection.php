<?php
class InvoiceCollection
{
    private $invoices = [];

    public function add(Invoice $invoice)
    {
        $this->invoices [$invoice->getCountry()] = $invoice;
    }

    public function getByCountry(string $country): ?Invoice
    {
        return $this->products[$country] ?? null;
    }

    public function getInvoices()
    {
        return $this->invoices;
    }
}