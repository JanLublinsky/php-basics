<?php

class SavingsAccount
{
    public $startingBalance;

    public function __construct(int $startingBalance)
    {
        $this->startingBalance = $startingBalance;
    }

    public function withdrawal($withdraw)
    {
        $this->startingBalance -= $withdraw;
        return $withdraw;
    }

    public function deposit($deposit)
    {
        $this->startingBalance += $deposit;
        return $deposit;
    }

    public function monthlyInterest($annualInterestRate)
    {
        $interest = $this->startingBalance * ($annualInterestRate / 100 / 12);
        $this->startingBalance += $interest;
        return $interest;
    }
}

class SavingsTest
{
    public static function main()
    {
        $totalDeposits = 0;
        $totalWithdrawals = 0;
        $totalInterest = 0;
        $input = readline('How much money is in the account?: ');
        while (!is_numeric($input)) {
            $input = readline("Invalid input. Please try again: ");
        }
        $savings = new SavingsAccount($input);
        $input = readline('Enter the annual interest rate: ');
        while (!is_numeric($input)) {
            $input = readline("Invalid input. Please try again: ");
        }
        $annualInterestRate = $input;
        $input = readline('How long has the account been opened? ');
        while (!is_numeric($input)) {
            $input = readline("Invalid input. Please try again: ");
        }
        $term = $input;

        for ($i = 1; $i <= $term; $i++) {

            $input = readline("Enter amount deposited for month: $i: ");
            while (!is_numeric($input)) {
                $input = readline("Invalid input. Please try again: ");
            }
            $totalDeposits += $savings->deposit($input);

            $input = readline("Enter amount withdrawn for month: $i: ");
            while (!is_numeric($input)) {
                $input = readline("Invalid input. Please try again: ");
            }
            $totalWithdrawals += $savings->withdrawal($input);

            $totalInterest += $savings->monthlyInterest($annualInterestRate);
        }
        echo "Total deposited: $" . number_format($totalDeposits, 2, ".", ",") . PHP_EOL;
        echo "Total withdrawn: $" . number_format($totalWithdrawals, 2, ".", ",") . PHP_EOL;
        echo "Interest earned: $" . number_format($totalInterest, 2, ".", ",") . PHP_EOL;
        echo "Ending balance: $" . number_format($savings->startingBalance, 2, ".", ",") . PHP_EOL;
    }
}

SavingsTest::main();
