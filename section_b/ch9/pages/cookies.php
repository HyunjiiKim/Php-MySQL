<?php

$counter = $_COOKIE['counter'] ?? 0; 
// $counter stores the number of pages that user views. If a browser doens't send anything it means the user doesn't view anything or the cookies are already expired, $counter stores 0, if we don't add null coalescing oprator, it'd return NULL instead of 0
$counter = $counter + 1;
// since $counter is active when user loads the page, so $counter should be added. 
setcookie('counter', $counter, time()+(86400*15)); 
// update cookie, so $counter allows $_COOKIE['counter] to store the number of pages the user has viewed. and this cookie expire in 15 days (86400 seconds = 1 day)

//create a message indicates the page views
$message = 'Page Views: '. $counter;


//all cookies setting should be done before sending to browser (any HTML outputs) beacause setcookie() sends HTTP header.

$counter2 = filter_input(INPUT_COOKIE, 'counter'); // for example, this $counter2 doesn't have null coalescing operator, it returns NULL when the cookie doesn't exist. So this counts -1 than $counter
?>

<?php include '../includes/header.php';?>
<h2>Hello World!</h2>
<?=$message?> </br>
<?=$counter2?>
<p>It can be counted when you refresh this page</p>
<?php include '../includes/footer.php';?>



