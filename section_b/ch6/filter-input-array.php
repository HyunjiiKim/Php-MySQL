<?php $form=filter_input_array(INPUT_POST);?>

<?php include 'includes/header.php';?>
<form action="filter-input-array.php" method="POST">
    <label for="email">E-mail</label>
    <input type="email" name="email"></br>
    <p>
        <input type="checkbox" name="terms" value="true">
        I agree to terms and conditions.
    </p>
    <input type="submit" value="Save">
</form>
<pre><?= var_dump($form)?></pre>
<?php include 'includes/footer.php'?>
