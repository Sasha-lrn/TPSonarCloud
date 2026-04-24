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

    
}
