<?php
$start = new DateTime();
$start -> setDate(2024,11,16);
$start -> setTime(13,30);

//declare $end variable, clonning $start
$end = clone $start;
//Update $end variable, add 2 days 
$end -> modify('+2 day');
//Update $end variable, add 6 and 2 minutes
$end -> modify('+6 hours 2 min');
//Update $end variable, substract 2 years
$end -> modify('-2 year');
?>

<?php include '../includes/header.php';?>
<h2>Event Planner</h2>
<div>
    <p> Start Date: <?=$start -> format('l, jS m Y')?> at <?=$start->format('h:i a')?></p>
    <p> End Date: <?=$end -> format('l, jS m Y')?> at <?=$end->format('h:i a')?></p>
</div>
<?php include '../includes/footer.php';?>