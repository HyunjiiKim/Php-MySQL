<?php
function total(int $price, int $qty){
    $total = $price * $qty;
    return $total;
}
?>

<h1>Invoice</h1>
<p><strong>Total:&nbsp;</strong><?=total(5);?></p>