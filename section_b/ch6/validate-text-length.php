<?php /*
mb_strlen(string) : Gets the length of a string.
*/
declare(strict_types=1);

$username='';
$message='';

function is_text(string $text, int $min=0, int $max=1000): bool{$length=mb_strlen($text);
    /* if($length >= $min && $length <= $max ){
        return $length;
    }
        Returns the $length directly if it falls within the specified range, 
        but this contradicts the expected return type bool. 
        The function is expected to return true or false, not the length.*/

    return ($length >= $min && $length <= $max);
    /*Correctly returns true if the length is within the specified range, or false otherwise.*/


}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    if(is_text($username,3,18)){
        $message = "Username is valid";
    }else{
        $message = "Username is not valid";
    }
}

?>

<?php include 'includes/header.php';?>
<?= $message;?>
<form action="validate-text-length.php" method="POST">
    <p>
        Username : &nbsp; 
        <input type="text" name="username" value="<?=htmlspecialchars($username);?>">
    </p>
    <input type="submit" value="Save">
</form>

<?php include 'includes/footer.php';?>