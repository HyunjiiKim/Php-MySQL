<?php
//declare(strict_type=1);
$age='';
$message='';

function age_range(int $age, int $min, int $max): bool{
    return ($age >= $min && $age <=$max);
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $age = $_POST['age'];
    if( age_range($age,18,65)){
        $message="Age is valide";
    }else{
        $message="You must be 18-65.";
    }
}
?>

<?php include "includes/header.php";?>
<?= $message?>
<form action="validate-number-range.php" method="POST">
    <p>
        Age: &nbsp; <input type="text" name="age" value="<?=htmlspecialchars($age)?>">
    </p>
    <input type="submit" value="Send">
</form>

<?php include "includes.footer.php";?>