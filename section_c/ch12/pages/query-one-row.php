<?php

require '../includes/database-connection.php';

$sql = "SELECT forename, surname
        FROM member
        WHERE id=1";

$statement = $pdo->query($sql);
$member = $statement -> fetch();
?>

<?php include '../includes/header.php';?>
<?= $member['forename']?> &nbsp;
<?= $member['surname']?>
<?php require '../includes/functions.php';?>
<hr>
<h2>Use htmlspecialchars() to proect from XSS attacks</h2>
<?= html_escape($member['forename'])?>
<?= html_escape($member['surname'])?>
<?php include '../includes/footer.php';?>