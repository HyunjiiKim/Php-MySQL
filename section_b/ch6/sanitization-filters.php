<?php
$user=[
    'name' => 'Hyunji KIM <script src="js/example.js"/>',
    'mobile' => '0652969875',
    'amountDue' => '2,523.75',
    'email' => 'hyunjikim@hyunjikim.fr',
];

$sanitize_user=[
    'name' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'mobile' => FILTER_SANITIZE_NUMBER_INT,
    'amountDue' => [
        'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
        'flags' => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION,
    ],
    'email' => FILTER_SANITIZE_EMAIL,
];

$user=filter_var_array($user,$sanitize_user);
?>

<?php include 'includes/header.php';?>
<h1>User's information</h1>
<div>
    <p>Name:&nbsp;<?=$user['name']?></p>
    <p>Mobile:&nbsp;<?=$user['mobile']?></p>
    <p>E-mail:&nbsp;<?=$user['email']?></p>
    <p>Amount Due:&nbsp;<?=$user['amountDue']?></p>
</div>
<pre><?php var_dump($user);?></pre>
<?php include 'includes/footer.php';?>