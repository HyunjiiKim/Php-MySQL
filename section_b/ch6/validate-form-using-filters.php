<?php
//Initialize $user and $error arrays, $message variable.
$user=['name'=>'',"age"=>'',"terms"=>'',];
$error=['name'=>'',"age"=>'',"terms"=>false,];
$message='';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $validation_filters=[
        'name' => [
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => [
                'regexp' => '/^[A-z]{2,10}$/',
            ],
        ],
        'age' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' =>[
                'min_range' => 18,
                'max_range' => 65,
            ]
        ],
        'terms' => [
            'filter' => FILTER_VALIDATE_BOOLEAN,
        ]
    ];
    $user=filter_input_array(INPUT_POST,$validation_filters);

    $error['name']=$user['name']?'':'Error, please check your name';
    $error['age']=$user['age']?'':'Error, please check your age';
    $error['terms']=$user['terms']?'':'Error, please check your terms';

    $invalid=implode($error);

    if($invalid){
        $message='please check all the error messages.';
    }else{
        $message='';
    }

    $user['name'] = filter_var($user['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $user['age']  = filter_var($user['age'],  FILTER_SANITIZE_NUMBER_INT);
}
?>
 
 <?php include 'includes/header.php';?>
 <?=$message?>
 <form action="validate-form-using-filters.php" method='POST'>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?=$user['name']?>">
    <span class="error"><?=$error['name']?></span>
    <label for="">Age</label>
    <span class="error"><?=$error['age']?></span>
    <input type="text" name="age" value="<?=$user['age']?>">
    <p>
        <input type="checkbox" name="terms" value="true" <?= $user['terms'] ? 'checked' : '' ?>>
        I agree to the terms and conditions.
    </p>
    <span class="error"><?=$error['terms']?></span>
    <input type="submit" value="Save">
 </form>
 <pre><?php var_dump($user)?></pre>
 <?php include 'includes/footer.php';?>