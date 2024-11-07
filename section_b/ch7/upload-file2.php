<?php
$message='';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_FILES['image'])&&$_FILES['image']['error']===0){
        $message="<b>File Name :</b>".$_FILES['image']['name']."</br>";
        $message.="<b>Temporary Path: </b>".$_FILES['image']['tmp_name']."</br>";
        $message.="<b>File Size: </b>".$_FILES['image']['size']."</br>";
        $message.="<b>File Type: </b>".$_FILES['image']['type']."</br>";
    }else{
        $message="Something occurs. Check your file.";
    }
}
?>

<?php include 'includes/header.php';?>
<?=$message?>
<form action="upload-file2.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" accept="image/*">
    <input type="submit" value="Save">
</form>
<pre><?php var_dump($_FILES)?></pre>
<?php include 'includes/footer.php';?>