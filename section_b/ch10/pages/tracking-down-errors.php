<?php
echo '<p><i>1. Start of page</i></p>';
$basket['pen'] = 1.29;
$basket['notebook'] = 2.99;
$basket['ruler'] = 'two';

function total(array $basket): int{
    echo '<p><i>3. Inside total () function</i></p>';
    $total = 0;
    foreach($basket as $item => $price){
        $total = $total + $price; //fatal error : uncaught typeError
    }
    return $total;
}


echo '<p><i>2. Before function called</i></p>';
$total = total($basket);

?>
<?php include '../includes/header.php';?>
<h3>Basket</h3>`
<p><b>Total : $ <?=number_format($total,2)?></b></p>
<?php include '../includes/footer.php';?>
<?php echo '<p><i>4: End of page</i></p>';?>
<hr>
