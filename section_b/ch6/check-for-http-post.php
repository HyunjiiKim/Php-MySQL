<?php include "includes/header.php";?>
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    $term = $_POST['term'];
    echo "You searched for ". htmlspecialchars($term);
}else{?>
    <form action="check-for-http-post.php" method="POST">
        <p>
            Search for: &nbsp;<input type="text" name="term">
        </p>
        <input type="submit" value="Search">
    </form>
<?php }?>
<?php var_dump($_POST);?>
<?php include "includes/footer.php";?>