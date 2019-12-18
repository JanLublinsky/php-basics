<?php

class Account
{
    public $name;
    public $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function withdrawal($withdraw)
    {
        $this->balance -= $withdraw;
    }

    public function deposit($deposit)
    {
        $this->balance += $deposit;
    }

    public function __toString()
    {
        return $this->name . "," . $this->balance . PHP_EOL;
    }
}

$matts_account = new Account("Matts's account", 1000.00);
$my_account = new Account("My account", 0.00);

echo "Initial state:\n";
echo $matts_account;
echo $my_account;
$matts_account->withdrawal(100);
$my_account->deposit(100);
echo "After first transfer:\n";
echo $matts_account;
echo $my_account;

function transfer(Account $from, Account $to, int $howMuch)
{
    $from->balance -= $howMuch;
    $to->balance += $howMuch;
}

$a_account = new Account("A", 100);
$b_account = new Account("B", 0);
$c_account = new Account("C", 0);
transfer($a_account, $b_account, 50);
transfer($b_account, $c_account, 25);

echo $a_account . $b_account . $c_account;