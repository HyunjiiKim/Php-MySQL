<?php
//Set Timezone
date_default_timezone_set('Asia/Seoul');

//Set $today and $event variables, current time
$today = new Datetime();
$event = new DateTime('2024-11-14 09:00');

//set $countdown variable, defining difference between $today and $event
$countdown = $today->diff($event);

//Set $today2 variable saving current time
$today2 = new Datetime();
//set new date interval for 1 year
$intervalYear = new dateinterval('P1Y');
//set new date interval for 2 months
$intervalMonth = new dateinterval('P2M');
//set new date interval for 3 days 5 hours 23 minutes 15 seconds
$intervalDatetime = new dateinterval('P3DT5H23M15S'); 

//add today to intervalYear variable
$today2 -> add($intervalYear);
//add today to intervalMonth variable
$today2 -> add($intervalMonth);
//ad today to intervalDatetime variable
$today2 -> add($intervalDatetime);
?>
<?php include '../includes/header.php'?>
<h2>CountDown to Korean SAT(수능)</h2>
<?= $countdown->format('%y years %m Months %d days %h hours %i minutes')?>
<h3>Test Date/Time</h3>
<p><?=$today2->format('d-m-Y h:i:s')?></p>
<?php include '../includes/footer.php'?>