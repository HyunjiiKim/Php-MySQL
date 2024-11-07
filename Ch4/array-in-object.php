<?php

class Customer{
    public int $customerId;
    public string $firstName;
    public string $lastName;

    public function __construct(int $customerId, string $firstName, string $lastName){
        $this -> customerId = $customerId;
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
    }
}

class Account{

    public array $number;
    public string $type;
    protected float $balance;
    public ?float $interest;

    public function __construct(array $number, string $type, float $balance=0.00, ?float $interest=null){
        $this -> number = $number;
        $this -> type = $type;
        $this -> balance = $balance;
        $this -> interest = $interest;
    }

    public function deposit($amount){
        $this -> balance += $amount;
        return $this -> balance;
    }

    public function withdraw($amount){
        $this -> balance -= $amount;
        return $this -> balance;
    }

    public function applyInterest(){
        if($this -> interest !==null){
            $this -> balance = ($this -> balance)*($this -> interest + 1);
        }
        return $this -> balance;
    }

    public function getBalance(){
        return $this -> balance;
    }
}

$numbers=['account_number'=>12345678,'routing_number'=>87654321,];

$account= new Account($numbers, 'Saving', 100.00, 0.01);
?>

<?php include 'header.php'; ?>
<h2>savings account</h2>
<p> Account : <?= $account -> number['account_number'];?></br>Routing : <?=$account->number['routing_number'];?></p>
<?php include 'footer.php';?>