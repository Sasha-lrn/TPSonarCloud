<?php
 
class BankAccount
{
    private float $balance;
    private string $owner;

    public function __construct(string $owner, float $initialBalance)
    {
        $this->owner = $owner;
        $this->balance = $initialBalance;
    }
 

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }
 

    public function withdraw(float $amount): void
    {
        $this->balance -= $amount;
    }
 
    public function getBalance(): float
    {
        return $this->balance;
    }
 

    public function transfer(BankAccount $target, float $amount): void
    {
        try {
            $this->withdraw($amount);
            $target->deposit($amount);
        } catch (\Exception $e) {
            echo $e;
        }
    }
 

    public function computeFee(float $rate): float
    {
        return $this->balance * $rate;
    }

}
