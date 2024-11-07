<?php

class Customer{

    public int $customerId;
    public string $firstName;
    public string $lastName;
    public string $email;
    protected string $password;
    public array $accounts;

    public function __construct(int $customerId, string $firstName, string $lastName, string $email, string $password, array $accounts){
        $this -> customerId = $customerId;
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
        $this -> email = $email;
        $this -> password = $password;
        $this -> accounts = $accounts;
    }

    public function getPassword(): string{
        return $this -> password;
    }

    public function getFullName(): string{
        return $this -> firstName . ' ' . $this -> lastName;
    }
}
?>