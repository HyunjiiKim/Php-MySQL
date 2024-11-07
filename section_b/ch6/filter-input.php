<?php $location=filter_input(INPUT_GET,'city'); 
$city=['London','NewYork',];?>

<?php include 'includes/header.php';?>

    <?php foreach($city as $c){?>
        <a href="filter-input.php?city=<?=$c?>"><?=$c?></a>
    <?php }?>
    
<?php include 'includes/footer.php';?>