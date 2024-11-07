<?php

class Account{
    
    public int $number;
    public string $type;
    protected float $balance;
    public ?float $interest;

    public function __construct(int $number, string $type, float $balance=0.00, ?float $intereste=null){
        $this -> number = $number;
        $this -> type = $type;
        $this -> balance = $balance;
        $this -> interest = $interest;
        
    }

    public function getBalance(){
        return $this -> balance;
    }
}
?>