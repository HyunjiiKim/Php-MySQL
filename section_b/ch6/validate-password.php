<?php /*
mb_strlen(string) : Gets the length of a string.
preg_match(string) : Perform a regular expression match
*/
declare(strict_types=1);

$password='';
$message='';


function is_pwd(string $password, int $min, int $max): bool{
    if(
        mb_strlen($password) >= $min &&
        mb_strlen($password) <= $max &&
        preg_match('/[A-Z]/', $password) &&
        preg_match('/[a-z]/', $password) &&
        preg_match('/[0-9]/', $password) &&
        preg_match('/[\W]/',$password) 
        //special characters should be inside square brackets [], and you don't need commas inside the character set. 
        // [\W] means special caracters
    ){
        return true;
    }
    return false;
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $password=$_POST['password'];
    if(is_pwd($password,8,20)){
        $message="Password is valid";
    }else{
        $message="Password is not valid";
    }
}
?>

<?php include 'includes/header.php';?>
<?= $message?>
<form action="validate-password.php" method="POST">
    <p>
        password : &nbsp; <input type="password" name="password" value="<?=htmlspecialchars($password)?>">
    </p>
    <input type="submit" value="Send">
</form>
<?php include 'includes/footer.php';?>