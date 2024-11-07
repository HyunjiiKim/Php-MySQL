<?php
$order=['notebook','pencil','eraser',];
array_unshift($order,'scissors'); //array(4) { [0]=> string(8) "scissors" [1]=> string(8) "notebook" [2]=> string(6) "pencil" [3]=> string(6) "eraser" }
array_pop($order);//array(3) { [0]=> string(8) "scissors" [1]=> string(8) "notebook" [2]=> string(6) "pencil"}
$items = implode(', ', $order); //string(26) "scissors, notebook, pencil"

$classes = [
    "Knitting" => "May 4th",
    "Lettering" => "May 18th",
    "Origami" => "June 5th",
    "Quilting" => "June 23rd",
];
array_shift($classes); //remove first element of array $classes 
$new=[
    "Origami" => "June 5th",
    "Quilting" => "June 23rd",
];
$claases=array_merge($classes,$new);
?>
<?php include 'includes/header.php';?>
<h1>Classes</h1>
<?php
    foreach($classes as $description => $date){
?>
    <b><?= $description ?></b> <?= $date ?> </br>
<?php } ?>
<?php include "includes/footer.php"?>