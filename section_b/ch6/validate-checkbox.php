<?php
/*isset() determine if a variable is declared and is different than null*/
$check='';
$message='';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $check = (isset($_POST['check']) && $_POST['check']==TRUE)?true:false;
    $message= $check ? 'Thank you':'You must agree to the terms and conditions';
}
?>

<?php include 'includes/header.php';?>
<b><?= $message ?></b>
<form action="validate-checkbox.php" method='POST'>
    <p>
        You must agree to the terms and conditions</br>I agree to the terms and conditions: &nbsp; 
        <input type='checkbox' name='check' value='true' <?= $check?'checked':''?>>
    </p>
    <input type='submit' value='Save'>
</form>
<?php include 'includes/footer.php';?>