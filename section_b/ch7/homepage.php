<?php 
$pages=[
    'upload-file1' => 'How to upload file',
    'upload-file2' => 'Upload file and its information',
    'move-file' => 'Move a File',
    'validate-file' => 'Validate a File',
    'validate-file2' => 'Validate a File with Errors',
    'resize-gd' => 'Resize an image Using GD',
    'resize-im' => 'Use Imagick to Resize',
    'crop-im' => 'Use Imagick to Crop',
    'test' => 'Test with Example',
];
?>
<?php include 'includes/header.php';?>
<h1>List of files</h1>
<ul>
    <?php
    foreach($pages as $key => $value){ ?>
        <li><a href="<?=$key?>.php"><?=$value?></a></li>
    <?php } ?>
</ul>
<?php include 'includes/footer.php';?>