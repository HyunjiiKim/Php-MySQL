<?php
$message='';
$moved=false;


if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_FILES['file']) && $_FILES['file']['error']===0){
        $path='./uploads/';
        include 'includes/functions/function.php';
        $filename=createFileName($_FILES['file']['name'],$path);

        $destination=$path.$filename;

        $moved=move_uploaded_file($_FILES['file']['tmp_name'],$destination);
        if($moved===true){
            $message='<img src="'.$destination.'" alt="Uploaded Image"'.'/>';    
        }else{
        $message='Your file couldn\'t be saved';
    }}else{
        $message="Error for uploading";
    }
}
?>

<?php include 'includes/header.php';?>
<?=$message?>
<form action="validate-file.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" accept='application/*,image/*'>
    <input type="submit" value="Save">
</form>
<?php include 'includes/footer.php';?>