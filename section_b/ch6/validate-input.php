<?php
$settings['options']['min_range']=0;
$settings['options']['max_range']=255;

$number=filter_input(INPUT_POST, 'number',FILTER_VALIDATE_INT,$settings);

?>

<?php include 'includes/header.php';?>
<form action="validate-input.php" method="POST">
    <div class="form-element">
        <p>Number :
            <input type="text" name="number" value="<?=htmlspecialchars($number);?>">
        </p>
    </div>
    <input type="submit" value="Save">
</form>
<?php var_dump($number);?>
<?php include 'includes/footer.php';?>
