<?php

class Account {
    private Holder $holder;
    private float $balance;
    private static int $accountNumbers = 0;


    function __construct(Holder $holderInput)
    {
        $this->holder = $holderInput;
        $this->balance = 0;
        $this->holder->nameValidation($this->holder->getName());
        Account::$accountNumbers++;
    }

    function __destruct()
    {
        Account::$accountNumbers--;
    }

    public static function getNoAccount(): int
    {
        return self::$accountNumbers;
    }

    public function getCpf(): string
    {
        return $this->holder->getCpf();
    }

    public function getName(): string
    {
        return $this->holder->getName();
    } 

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function deposit(float $value): void
    {
        if($value < 0) {
            echo 'Use valores positivos!';
            return;
        }
        $this->balance += $value;
    }

    public function withdraw(float $value): void
    {
        if($value > $this->balance) {
            echo "Impossível retirar, tente um valor menor, seu saldo é de {$this->balance}";
            return;
        }
        $this->balance -= $value;
    }

    public function transfer(float $value, Account $account): void
    {
        if($value < 0) {
            echo "Use valores positivos!";
            return;
        }
        $this->withdraw($value);
        $account->deposit($value);
    }

}