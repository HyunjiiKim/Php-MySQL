<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

function resizeImageGD($orgPath,$newPath,$maxWidth,$maxHeight){

    $imageData = getimagesize($orgPath);
    $orgWidth = $imageData[0];
    $orgHeight = $imageData[1];
    $mediaType = $imageData[2];
    $newWidth = $maxWidth;
    $newHeight = $maxHeight;
    $orgRatio = $orgWidth/$orgHeight;
    
    // Calculate new image's size

    if($orgWidth>$orgHeight){
        $newHeight = $newWidth/$orgRatio;
    }else{
        $newWidth = $newHeight*$orgRatio;
    }

    switch($mediaType){
        case 'image/gif':
            $org = imagecreatefromgif($orgPath);
            break;
        case 'image/jpeg':
            $org = imagecreatefromjpeg($orgPath);
            break;
        case 'image/png':
            $org = imagecreatefrompng($orgPath);
            break;
    }

    $new = imagecreatetruecolor($newWidth,$newHeight);

    imagecopyresampled($new,$org,0,0,0,0,$newWidth,$newHeight,$orgWidth,$orgHeight);

    switch($mediaType){
        case 'image/gif': $result=imagegif($new,$newPath); break;
        case 'image/jpeg': $result=imagejpeg($new,$newPath); break;
        case 'image/png': $result=imagepng($new,$newPath); break;
    }

    return $result;
}

include 'includes/functions/function.php';

$message='';
$error='';
$allowedType=['image/gif','image/jpeg','image/png',];
$allowdExt=['.gif','.jpeg','.png',];
$maxSize=20000000;
$path='uploads/';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES['image']['error'] === UPLOAD_ERR_INI_SIZE) {
        $message = 'Error: The file is too large';
    } elseif (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        if ($_FILES['image']['size'] > $maxSize) {
            $error .= 'Error: The file should be smaller than 2MB.';
        }

        $filename = $_FILES['image']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        
        if (!in_array($ext, $allowdExt)) {
            $error .= 'Error: The file extension is not allowed.';
        }
        
        if (!in_array(mime_content_type($_FILES['image']['tmp_name']), $allowedType)) {
            $error .= 'The file mediatype is not allowed.';
        }

        $filename = strtolower(createFileName($_FILES['image']['name'], $path));
        $destination = $path . $filename;

        if (!$error) {
            $moved = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            if (!$moved) {
                $error .= 'The file could not be moved.';
                $message='Error :'.$error;
            } else {
                $thumbpath = $path . 'thumb_' . $filename;
                $resized = resizeImageGD($destination, $thumbpath, 200, 200);
                if (!$resized) {
                    $error .= 'The image could not be resized.';
                    $message = 'Error:'.$error;
                }
            }
        }
    }
}


?>
<?php include 'includes/header.php';?>
<?=$message;?>
<form action="resize-gd.php" method="POST" enctype='multipart/form-data'>
    <input type="file" name="image" accept='image/*'>
    <input type="submit" value="Send">
</form>
<?php include 'includes/footer.php';?>