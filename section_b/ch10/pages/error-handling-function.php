<?php
set_error_handler('error_handler'); //This query allows to display Error on browser.

function error_handler($level, $message, $file='',$line=0){
    $message = $level.' '.$message.' in '.$file.' on line '.$line;
    error_log($message);
    http_response_code(500);

    require_once '../includes/header.php';
    echo '<h1>Sorry, a problem occurred<h1>
    The site\'s owners have been informed. Please try again later.';
    require_once '../includes/footer.php';
    exit;
}

$username=$_GET['username'];

?>

<?php include '../includes/hedaer.php';?>
<h1>Hello, <?=$username?></h1>
<?php include '../includes/footer.php';?>