<?php
class Account{

    public int $number;
    public string $type;
    public float $balance;

    public function deposit(float $amount): float{

        $this -> balance +=$amount;
        return $this -> balance;

    }

    public function withdraw(float $amount): float{

        $this -> balance -=$amount;
        return $this -> balance;
    }

}

$account = new Account();
$account -> balance = 5000.00;
?>
<?php include "header.php"?>
<p>$<?= $account -> deposit(50.00);?></p> <?php // Ici, $account -> balance est affectée comme 5050 ?>
<p>$<?= $account -> withdraw(75.00);?></p> <?php // $account -> balance est reaffectée comme 4975 ?>
<?php include "footer.php"?>