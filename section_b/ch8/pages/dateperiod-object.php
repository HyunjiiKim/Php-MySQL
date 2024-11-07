<?php
$start = new DateTime();
$end = clone $start;
$end -> modify('+1 year');
$interval = new dateinterval('P10D');
$period = new dateperiod($start,$interval,$end);
?>

<?php include '../includes/header.php'; ?>
<div>
   <?php
   foreach($period as $period){?>
    <p><?=$period->format('l, jS m Y')?></p>
   <?php } ?>
</div>
<?php include '../includes/footer.php'; ?>