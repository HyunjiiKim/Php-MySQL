<?php
require '../includes/database-connection.php';

    $sql = "SELECT forename, surname
            FROM member
            WHERE id =12";

$statement = $pdo -> query($sql);
$member = $statement -> fetch();

if(!$member) // if no member exsits,
{ include './page-not-found.php';}
?>

<?php include '../includes/header.php';?>
<p><?= $member['forename'];?>
<?= $member['surname'];?></p>
<?php include '../includes/footer.php';?>

