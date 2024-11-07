<?php
$start =strtotime('January 11 2025');
$end=mktime(15,0,0,1,14,2025);
$start_date = date('d m y',$start);
$end_date = date('g:i a D jS F Y',$end);
?>

<?php include '../includes/header.php'; ?>
<section>
    <h2>A Wedding Celebration to Remember</h2>
    <p>Join us for a magical three-day affair in honor of the union of</p>
    <div>
        <strong>Lady Annabelle Middleton</strong>
        &
        <strong>Sir Edward Fiennes</strong>
    </div>
</section>
<section>
    <h3>Start Date: <?=$start_date?></h3>
    <h3>End Date: <?=$end_date?></h3>
    <strong></strong>
    <p>We invite you to join us for a three-day celebration of love, laughter, and joy. Details to follow.</p>
</section>
<section>
    Best Regards,
    on <?=date('d m Y'); ?>
</section>
<?php include '../includes/footer.php'; ?>