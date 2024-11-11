<?php
session_start();
$counter = $_SESSION['counter'] ?? 0;
$counter=$counter+1; 
$_SESSION['counter']=$counter;

$message = 'Page views: '.$counter;
?>

<?php include '../includes/header.php';?>
<h2>Hello World!</h2>
<?=$message?> 
<p>It can be counted when you refresh this page</p>
<?php include '../includes/footer.php';?>
