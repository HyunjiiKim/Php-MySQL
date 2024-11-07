
<?php include 'includes/header.php';?>
<form action="upload-file1.php" method="POST">
    <input type="file" name="image" accept="image/*, application/pdf">
    <input type="submit" value="Save">
</form>
<pre><?php var_dump($_POST);?></pre>
<?php include 'includes/footer.php';?>