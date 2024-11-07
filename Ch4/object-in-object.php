<?php
declare(strict_types=1);

class Account{

    public int $number;
    public string $type;
    protected float $balance;
    public ?float $interest;

    public function deposit(float $amount): float{
        $this -> balance += $amount;
        return $this -> balance;
    }

    public function withdraw(float $amount): float{
        $this -> balance -= $amount;
        return $this -> balance;
    }

    public function applyInterest(): float{
        if($this -> interest !==null){
            $this -> balance = $this -> balance * (1+ $this -> interest);
        }
        return $this -> balance;
    }

    public function __construct(int $number, string $type, float $balance=0.00, ?float $interest=null){
        $this -> number = $number;
        $this -> type = $type;
        $this -> balance = $balance;
        $this -> interest = $interest;
    }

    public function getBalance(): float{
        return $this -> balance;
    }
}


class AccountNumber{
    public int $accountNumber;
    public int $routingNumber;

    public function __construct(int $accountNumber, int $routingNumber){
        $this -> accountNumber = $accountNumber;
        $this -> routingNumber = $routingNumber;
    }
}

$numbers = new AccountNumber(12345678,87654321);
$account = new Account($numbers->accountNumber, 'savings', 1456.52, 0.01);
?>
<?php include 'header.php';?>
<h2>Account : <?= $account -> type ?></h2>
<p> Account Number : <?=$numbers ->accountNumber?></br> Routing Number : <?=$numbers -> routingNumber ?></p>
<?php include 'footer.php';?>
