<?php
$Seltz = new datetimezone('Asia/Seoul');
$PARtz = new datetimezone('Europe/Paris');
$locationParis = $PARtz -> getlocation();
$sel = new datetime('now',$Seltz);
$par = new datetime('now', $PARtz);
?>

<?php include '../includes/header.php'; ?>
<div>
    <div>
        <p>Seoul : <?=$sel->format('jS m Y h:i a')?></p> 
        <p>Paris : <?=$par->format('jS m Y h:i a')?></p>
    </div>
    <div>
        <h3>My School Information</h3>
        <p><?=$PARtz->getName()?></p>
        <p>Longitude: <?=$locationParis['longitude']?></p>
        <p>Latitude: <?=$locationParis['latitude']?></p>
    </div>
</div>
<?php include '../includes/footer.php'; ?>