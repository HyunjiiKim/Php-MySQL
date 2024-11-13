<?php
$pages=[
    'Control the way PHP errors display' => 'find-error-log',
    'Parse error1' => 'parse-error-1',
    'Parse error2' => 'parse-error-2',
    'Parse error3' => 'parse-error-3',
    'Parse error4' => 'parse-error-4',
    'Fatal error1' => 'fatal-error-1',
    'Fatal error2' => 'fatal-error-2',
    'Fatal error3' => 'fatal-error-3',
    'Fatal error4' => 'fatal-error-4',
    'Warning 1' => 'waring-1',
    'Warning 2' => 'waring-2',
    'Warning 3' => 'waring-3',
    'Warning 4' => 'waring-4',
    'Debugging: track down errors' => 'tracking-down-errors',
    'Error Handling Functions' => 'error-handling-function',
    'Handle Errors using <b>try...catch</b>' => 'try-catch',
    'Customized Error' => 'ImageHandler',
    'Catch two different exceptional errors' => 'throwing-exceptions',
    'Handle Default Error and Exception' => 'functions',
    'How to display Web server\'s error1' => 'live/page-not-found',
    'How to display Web server\'s error2' => 'live/error',

];
?>

<?php include './includes/header.php';?>
<h1>Error Handling</h1>
<ul>
    <?php
    foreach($pages as $title => $filename){ ?>
        <li><a href='pages/<?=$filename?>.php'><?=$title?></a></li>
    <?php } ?>
</ul>
<?php include './includes/footer.php';?>