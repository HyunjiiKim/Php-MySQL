<?php
$message='';
$error='';
$moved=false;
$allowedTypes=['img/jpeg','img/png','application/pdf',];
$allowedExt=['.jpeg','.png','.pdf'];
$maxSize=1234580;



if($_SERVER['REQUEST_METHOD']=='POST'){
    $error=($_FILE['file']['error']===1)?'':'Error: File Volume is Too Big.';

    if(isset($_FILES['file']) && $_FILES['file']['error']===0){
        $error.= ($_FILES['file']['size']<=$maxSize)?'':'Error: File Volume is Too big';

        $type=mime_content_type($_FILES['file']['tmp_name']);
        $error.=in_array($type,$allowedTypes)?'':'Error: wrong file type';

        $ext=strtolower(pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION));
        $error.=in_array($ext,$allowedExt)?'':'Error: wrong file extension';

        if(!$error){
            $path='./uploads/';
            include 'includes/functions/function.php';
            $filename=strtolower(createFileName($_FILES['file']['name'],$path));
            $destination=$path.$filename;
            $moved=move_uploaded_file($_FILES['file']['tmp_name'],$destination);
        }}
    
    if($moved===true){
            $message='<img src="'.$destination.'" alt="Uploaded Image"'.'/>';    
    }else{
            $message='Your file couldn\'t be saved:'.$error;
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