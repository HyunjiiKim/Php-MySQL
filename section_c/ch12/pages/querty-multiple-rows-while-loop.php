<?php
require '../includes/database-connection.php';
require '../includes/functions.php';

$sql = 'SELECT *
        FROM member;';

$statement = $pdo -> query($sql);
?>

<?php include '../includes/header.php';?>
<?php while($row=$statement->fetch()) { ?>
        <p>
                <?= html_escape($row['forename'])?>
                <?= html_escape($row['surname'])?>
        </p>
<?php } ?>
<?php include '../includes/footer.php';?>