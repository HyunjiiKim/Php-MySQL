<?php
$order=["eraser","ink","notebook","pencil","scissors","washi tape",]; //eraser, ink, notebook, pencil, scissors, washi tape
sort($order); //eraser, ink, notebook, pencil, scissors, washi tape
rsort($order); //washi tape, scissors, pencil, notebook, ink, eraser
$items = implode(", ",$order);
$classes=[
    "Knitting" => "May 4th",
    "Origami" => "June 8th",
    "Patchwork" => "April 12th",
];
/*
ksort($classes);
krsort($classes); 
Result : array(3) {["Patchwork"]=> string(10) "April 12th" ["Origami"]=> string(8) "June 8th" ["Knitting"]=> string(7) "May 4th"}*/
/*
krsort($classes);
ksort($classes);
Result : array(3) { ["Knitting"]=> string(7) "May 4th" ["Origami"]=> string(8) "June 8th" ["Patchwork"]=> string(10) "April 12th"}*/
?>

<?php include 'includes/header.php'; ?>
<h1>Orders</h1>
<?= $items;?>
<h1>Classes</h1>
<?php
foreach($classes as $description => $date){?>
<b><?= $description?></b><?= $date?></br>
<?php }?>