<?php include '../includes/sessions2.php'; ?>
<?php $_SESSION['logged_in'] = false; ?>
<?php include '../includes/header.php';?>
<?php include '../includes/menu.php';?>
<h3>You have been successfully logged out.</h3>
<a class='button' href='../homepage.php'>Back to Home</a>
<?php include '../includes/footer.php';?>