
    <?php
    class Customer{
        public string $forename;
        public string $surname;
        public string $email;
        public string $password;

    }

    class Account{

        public int $number;
        public string $type;
        public float $balance;

    }

    $customer = new Customer();
    $account = new Account();

    $customer -> forename = "Hyunji";
    $customer -> surname = "Kim";
    $customer -> email = "hyunjikim@hyunjikim.fr";
    $account -> balance = 5000.00;

    ?>
<?php include "./header.php";?>
<div>
    <p>Hello, <?= $customer->forename?> !</p>
    <p>Balance : <?= $account->balance?> </p>
</div>
<?php include "./footer.php";?>