<?php
require '../includes/database-connection.php';
require '../includes/functions.php';

$id=38;
$sql = "SELECT * FROM member WHERE id = :placeholder;";
$statement = $pdo -> prepare($sql);
$statement -> bindValue('placeholder',$id, PDO::PARAM_INT);
$statement -> execute();
$member = $statement -> fetch();
if(!$member){
    include 'page-not-found.php';
}
?>
<?php include '../includes/header.php';?>
<p>
    <?=html_escape($member['forename'])?>
    <?=html_escape($member['surname'])?>
</p>
<?php include '../includes/footer.php';?>