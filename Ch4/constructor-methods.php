<?php
declare(strict_types=1);

class Account{
    public int $number;
    public string $type;
    public float $balance;
    public ?float $interest; // The ? in public ?float $interestRate; indicates that the property $interestRate can either hold a value of type float or be null.
    //In PHP, this is known as a nullable type. By using ?float, you are telling PHP that the variable can accept either a float value or a null value, 
    //which gives you flexibility in cases where the interest rate might not always be set.

    public function __construct(int $number, string $type, float $balance=0.00, float $interest=0.00){
        $this -> number = $number;
        $this -> type = $type;
        $this -> balance = $balance;
        $this -> interest = $interest;
    }

    public function deposit(float $amount): float{
        $this -> balance += $amount;
        return $this -> balance;
    }

    public function withdraw(float $amount): float{
        $this -> balance -= $amount;
        return $this -> balance;
    }

    public function applyInterest(): ?float{
        if($this -> interest !== NULL){
            $this -> balance += $this -> balance * $this -> interest;
        }
        return $this -> balance;
    }
}

$checking = new Account(12345, 'checking', 45.00);
$savings = new Account(12346, 'savings');
$parking = new Account(12347, 'savings',0.00, 0.05);
?>

<?php include 'header.php';?>
<h2>Account Balance</h2>
<table>
    <thead>
        <td>Date</td>
        <td>Checking</td>
        <td>Savings</td>
        <td>Parking</td>
    </thead>
    <tbody>
        <tr>
            <td>21 August</td>
            <td><?= $checking -> balance ?></td>
            <td><?= $savings -> balance ?></td>
            <td><?= $parking -> balance?></td>
        </tr>
        <tr>
            <td>27 August</td>
            <td><?= $checking ->deposit(1352.24);?></td>
            <td><?= $savings -> balance?></td>
            <td><?= $parking -> balance?></td>
        </tr>
        <tr>
            <td>27 August</td>
            <td><?= $checking ->withdraw(700)?></td>
            <td><?= $savings -> deposit(300)?></td>
            <td><?= $parking -> deposit(400)?></td>
        </tr>
        <tr>
            <td>3 September</td>
            <td><?= $checking -> withdraw(23.45);?></td>
            <td><?=$savings ->balance;?></td>
            <td><?=$parking -> applyInterest()?></td>
        </tr>
    </tbody>
</table>
<?php include 'footer.php';?>