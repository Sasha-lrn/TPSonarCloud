<?php

use PHPUnit\Framework\TestCase;

class BankAccountTest extends TestCase
{
    public function testDepot(): void
    {
        $compte = new BankAccount("Alice", 100);
        $compte->deposit(50);
        $this->assertEquals(150, $compte->getBalance());
    }

    public function testWithdraw(): void
    {
        $compte = new BankAccount("Alice", 100);
        $compte->withdraw(50);
        $this->assertEquals(50, $compte->getBalance());
    }

    public function testBalance(): void
    {
        $compte = new BankAccount("Alice", 100);
        $this->assertEquals(100, $compte->getBalance());       
    }

    public function testComputeFee(): void
    {
        $compte = new BankAccount("Alice", 100);
        $compte->computeFee(2);
        $this->assertEquals(200, $compte->computeFee(2));       
    }

    public function testTransfer(): void
    {
        $compte = new BankAccount("Alice", 100);
        $compte2 = new BankAccount("Robin", 100);
        $compte->transfer($compte2, 50);

        $this->assertEquals(50, $compte->getBalance());
        $this->assertEquals(150, $compte2->getBalance());       
    }

    
}
