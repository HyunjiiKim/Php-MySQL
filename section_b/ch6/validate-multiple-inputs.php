<?php
    $form['email']='';
    $form['age']='';

    if($_SERVER['REQUEST_METHOD']=='POST'){
            $filters['email']=FILTER_VALIDATE_EMAIL;
            $filters['age']['filter']=FILTER_VALIDATE_INT;
            $filters['age']['options']['min_range']=16;
            $form=FILTER_INPUT_ARRAY(INPUT_POST,$filters);
        }?>
<?php include 'includes/header.php';?>
<form action="validate-multiple-inputs.php" method="POST">
    <div class="formElement">
        <label for="email">Email</label>
        <input type="text" name="email" value=<?=htmlspecialchars($form['email'])?>>
    </div>
    <div class="formElement">
        <label for="age">Age</label>
        <input type="text" name="age" value=<?=htmlspecialchars($form['age'])?>>
    </div>
    <div class="formElement">
        <p>
            <input type="checkbox" name="terms" value="1">
            I agree to the terms and conditions.
        </p>
    </div>
    <input type="submit" value="Save">
</form>
<pre><?php var_dump($form);?></pre>
<?php include 'includes/footer.php';?>