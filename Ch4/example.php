<?php
    include 'classes/account.php';
    include 'classes/customer.php';

    $accounts = [new Account(123456,"checking",100.00), new Account(123457,"saving",100.00,0.02),new Account(123458,"checking",-50.32,0.04),];
    $customer = new Customer(9782,'Hyunji','Kim','hyunjikim@hyunjikim.fr','1234',$accounts);
?>

<?php include 'header.php';?>
<h2> Name : <?= $customer -> getFullName(); ?></h2>
<table>
    <thead>
        <td>account number</td>
        <td>account type</td>
        <td>balance</td>
    </thead>
    <tbody>
        <?php foreach($customer -> accounts as $account){ ?>
        <tr>
            <td><?= $account -> number;?></td>
            <td><?= $account -> type;?></td>
            <?php if($account -> getBalance() >=0){?>
            <td class="credit">
            <?php } else{ ?>
             <td class="overdrawn">
            <?php } ?>
            $ <?= $account -> getBalance()?></td>
        </tr>
        <?php }?>
    </tbody>
<?php include 'footer.php';?>