<?php
$pages=[
    'How to set and access Cookies' => 'cookies',
    'Secure Cookies' => 'cookie-preferences',
    'How to set and access Sessions' => 'sessions',
    'Sign In system' => 'sessions2',
    'Guide user to sign in' => 'account', 
    'when successfully logged in, it guides to the account page' => 'login',
];
?>

<?php include './includes/header.php';?>
<h1>Cookies & Sessions</h1>
<ul>
    <?php foreach($pages as $title => $file){?>
        <li><a href='./pages/<?=$file?>.php'><?=$title?></a></li>
    <?php } ?>
</ul>
<?php include './includes/footer.php';?>