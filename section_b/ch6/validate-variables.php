<?php 
declare(strict_types=1);

$form=[
    'email'=>'',
    'age'=>'',
    'terms'=>0,
];

$data=[];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $filters = [
        'email' => [
            'filter' => FILTER_VALIDATE_EMAIL,
        ],
        'age' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => [
                'min_range'=>16,
            ],
        ],
        'terms' => [
            'filter' => FILTER_VALIDATE_BOOLEAN,
        ],
    ];
    $form=FILTER_INPUT_ARRAY(INPUT_POST);
    $data=FILTER_VAR_ARRAY($form,$filters);
}

?>

<?php include 'includes/header.php';?>
<form action="validate-variables.php" method='POST'>
    <div class="formElement">
        <label for="email">E-mail</label>
        <input type="text" name="email" value="<?=htmlspecialchars($form['email'])?>">
    </div>
    <div class="formElement">
        <label for="Age">Age</label>
        <input type="text" name="age" value="<?=htmlspecialchars($form['age'])?>">
    </div>
    <div class="formElement">
        <p>
        <input type="checkbox" name="terms" value="1">    
        I agree to terms and conditions</p>
    </div>
    <input type="submit" value="Save">
</form>
<pre><?php var_dump($data);?></pre>
<?php include 'includes/footer.php';?>