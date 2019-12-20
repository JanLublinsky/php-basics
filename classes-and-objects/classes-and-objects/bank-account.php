<?php

class BankAccount
{
    public $name;
    public $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    function show_user_name_and_balance(): void
    {
        $sign = ($this->balance > 0 ? "$" : "-$");
        echo $this->name . ", " . $sign . number_format(abs($this->balance), 2, ".", "'") . PHP_EOL;
    }

}

$ben = new BankAccount("Benson", 17.5);
$ben->show_user_name_and_balance();