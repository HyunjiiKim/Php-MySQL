<?php
    $pages=[
        'date-functions'=>'Date/Time Built-in Functions',
        'datetime-object'=>'Date/Time Objects',
        'datetime-object-set-date-and-time'=>'Date/Time Objects and Set Date/Time',
        'dateinterval-object'=>'Date/Interval Objects',
        'dateperiod-object'=>'Date/Period Objects',
        'datetimezone-object'=>'Date/Time zone Objects',
    ];
?>

<?php include 'includes/header.php';?>
<ul>
    <?php
    foreach($pages as $file => $label){?>
        <li><a href='pages/<?=$file?>.php'><?=$label?></a></li>
    <?php } ?>
</ul>
<?php include 'includes/footer.php';?>