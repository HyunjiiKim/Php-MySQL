<?php 
declare(strict_types=1);

class Account{

    public int $number;
    public string $type;
    protected float $balance;
    public ?float $interest;

    public function __construct(int $number, string $type, float $balance=0.00, ?float $interest=0.00){
        $this -> number =$number;
        $this -> type = $type;
        $this -> balance = $balance;
        $this -> float = $float;
    }

    public function deposit(float $amount): float{
        $this -> balance += $amount;
        return $this -> balance;
    }

    public function withdraw(float $amount): float{
        $this -> balance -= $amount;
        return $this -> balance;
    }

    public function applyInterest(): float{
        $this -> balance = $this->balance * $this -> interest;
        return $this -> balance;
    }

    public function getBalance(): float{
        return $this -> balance;
    }

}

$account = new Account(12345, 'checking', 800.45);

?>

<?php include 'header.php';?>
<p>Previous Balance : $ <?= $account -> getBalance();?></p>
<p>New Balance : $ <?= $account -> withdraw(50);?></p>
<p>Test : $ <?=$account -> balance;?></p>
<?php include 'footer.php';?>