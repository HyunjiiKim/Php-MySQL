<?php include "includes/header.php";?>
<?php
$submitted = $_GET['sent'] ?? '';
if($submitted==='search'){
    $term=$_GET['term'] ?? '';
    echo "You searched for: ".htmlspecialchars($term);
}else{?>
    <form action="check-for-http-get.php" method="GET">
        <p>
            Search for: &nbsp;<input type="search" name="term">
        </p>
        <input type="hidden" name="submitted" value="yes">
        <input type="submit" name="sent" value="search">
    </form>
<?php }
var_dump($_GET); ?>
<?php include "includes/footer.php";?>