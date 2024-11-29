<?php
require '../includes/database-connection.php';
require '../includes/functions.php';

$id = 122;
$sql = 'SELECT *
        FROM member
        WHERE id = :id;'; //:id: = placeholder

$statement = $pdo -> prepare($sql);
$statement -> execute(['id'=>$id]);
$member = $statement -> fetch();
if(!$member){
    include 'page-not-found.php';
}
?>
<?php include '../includes/header.php';?>
<p>
    <?= html_escape($member['surname']);?>
    <?= html_escape($member['forename']);?>
</p>
<?php include '../includes/footer.php';?>