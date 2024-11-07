<?php
/* in_array() checks if a value exists in an array */
$stars='';
$message='';
$star_ratings=[1,2,3,4,5,];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $stars=$_POST['stars'] ?? '';
    $valid=in_array($stars,$star_ratings);
    $message=$valid?'Thank you':'Select an option';
}
?>
<?php include "includes/header.php";?>
<?= $message ?>
<form action="validate-options.php" method="POST">
    <p>
        Star rating: 
        <?php foreach($star_ratings as $option){?>
        <?= $option ?> &nbsp; <input type="radio" name="stars" value="<?= $option ?>" <?= ($stars==$option)?'checked':''?>>
        <!--if <input type="radio" checked> : checked radio shows-->
        <?php } ?>
    </p>
    <input type="submit" value="Save">
</form>
<?php include 'includes/footer.php';?>