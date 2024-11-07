<?php 
$start= new Datetime('2024-11-23 19:30:00');
$end= date_create_from_format('j-n-Y H:i','24-11-2024 01:00');
?>

<?php require '../includes/header.php'?>
<section>
    <h3>You're Invited to a Fabulous Party!</h3>
    <h4>Start:</h4>
    <p><?=$start->format('l, jS M Y')?> at <?=$start->format('h:i')?></p>
    <h4>End:</h4>
    <p><?=$end->format('l, jS M Y')?> at <?=$end->format('h:i')?></p>
</section>
<section>
    <h3> Come celebrate with us!</h3>
    <p>It’s going to be an unforgettable evening filled with music, dancing, delicious food, and drinks!</p>
    <h3>RSVP</h3>
    <p>Please let us know if you can join the fun by <?=date('jS m Y')?></p>
</section>
<?php require '../includes/footer.php'?>