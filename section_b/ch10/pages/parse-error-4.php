<?php
$username='hyunjikim';
order=['coconut oil','peanut butter','oat milk',];
?>

<h1>My Cart<h1>
<div>
    Name: <?=$username?>
</div>
<div>
    <?php foreach($order as $item) {?>
    <li><?= $item ?></li> 
    <?php } ?>
</div>
