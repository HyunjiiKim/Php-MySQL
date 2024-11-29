<?php
$pages=[
    'Store data-base connection in includes folder' => 'database-connection',
    'Get a data row from database' => 'query-one-row',
    'Check if a query returns data' => 'checking-for-data',
    'Fetch multiple data rows' => 'query-multiple-rows',
    'Fetch multiple data rows while loop' => 'querty-multiple-rows-while-loop',
    'Display different data on the same page' => 'prepared-statement',
];
?>

<?php include './includes/header.php';?>
<h1>Cookies & Sessions</h1>
<ul>
    <?php foreach($pages as $title => $file){?>
        <li><a href='./pages/<?=$file?>.php'><?=$title?></a></li>
    <?php } ?>
</ul>
<?php include './includes/footer.php';?>