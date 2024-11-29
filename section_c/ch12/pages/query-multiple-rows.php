<?php
require '../includes/database-connection.php';
require '../includes/functions.php';

$sql = 'SELECT forename, surname
        FROM member;';

$statement = $pdo -> query($sql);
$member = $statement -> fetchAll();
?>
<?php include '../includes/header.php'; ?>
<div>
    <?php foreach($member as $key){ ?>
    <p>
        <?=html_escape($key['forename'])?>
        <?=html_escape($key['surname'])?>
    </p>
    <?php } ?>
</div>
<?php include '../includes/footer.php'; ?>