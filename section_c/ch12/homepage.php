<?php
$pages=[
    'Store data-base connection in includes folder' => 'database-connection',
    'Get a data row from database' => 'query-one-row',
    'test' => 'test',
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