<?php
$logged_in=FALSE;

if($logged_in!==TRUE){
    header('location: login.php');
    exit;
}
?>
<?php include 'includes/header.php';?>
<h1>Member Area</h1>
<p>Welcome to the members area</p>
<?php include 'includes/footer.php';?>