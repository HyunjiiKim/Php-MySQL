<?php
$message='';
$moved=false;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_FILES['image']) && $_FILES['image']['error']===0){

            $fileInfo=pathinfo($_FILES['image']['name']);
           
            $extension =$fileInfo['extension'];

            $destination ='uploads/'. $_POST['userid'].'.'.$extension;
            $tmp=$_FILES['image']['tmp_name'];
            $moved=move_uploaded_file($tmp,$destination);
        }
        
        if($moved===TRUE){
            $message="<img src=$destination alt=Photo".$_POST['userid'].">";
        }else{
            $message = "Error, your file couldn't be uploaded.";
        }
    }

?>
<?php include 'includes/header.php';?>
<?=$message?>
<form action="move-file.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="userid">
    <input type="file" name="image" accept="image/*">
    <input type="submit" value="Save">
</form>
<?php include 'includes/footer.php';?>