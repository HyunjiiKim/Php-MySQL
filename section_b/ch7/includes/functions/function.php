<?php
function createFileName($filename,$uploadPath){

    //Get a file's name and extension 
    $basename=pathinfo($filename,PATHINFO_FILENAME);
    $extension=pathinfo($filename,PATHINFO_EXTENSION);

    //Sanitize file's name
    $basename=preg_replace('/[^A-z0-9]/','-',$basename);

    $filename=$basename.'.'.$extension;

    //Change a name if it's repeated
    for($i=1;file_exists($uploadPath.$filename);$i++){
        $filename=$basename.'_Copy'.$i.'.'.$extension;
    }
    //Define an uploaded file's path
    return $filename;
}
?>