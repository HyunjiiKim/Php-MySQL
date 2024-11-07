<?php
declare(strict_types=1);
include 'includes/function.php';

$user=[
    'fname'=>'',
    'lname'=>'',
    'email'=>'',
    'pwd'=>'',
    'mobile'=>'',
    'adrs1'=>'',
    'adrs2'=>'',
    'zcode'=>'',
    'country'=>'',
    'option'=>'',
    'terms'=>'',
];
$errors=[
    'fname'=>'',
    'lname'=>'',
    'pwd'=>'',
    'zcode'=>'',
    'terms'=>'',
];
$message='';

$options=["email","sms",];


if($_SERVER['REQUEST_METHOD']=='POST'){
    $user['email']=$_POST['email'];
    $user['pwd']=$_POST['password'];
    $user['fname']=$_POST['fname'];
    $user['lname']=$_POST['lname'];
    $user['mobile']=$_POST['mobile'];
    $user['adrs1']=$_POST['address1'];
    $user['adrs2']=$_POST['address2'];
    $user['zcode']=$_POST['zipcode'];
    $user['country']=$_POST['country'];
    $user['option']=$_POST['option'];
    $user['terms']=(isset($_POST['terms']) && $_POST['terms']==true)?true:'';

    $errors['fname']=is_text($user['fname'],1,20)?'':"First name must be 1 and 20";
    $errors['lname']=is_text($user['lname'],1,20)?'':"Last name must be 1 and 20.";
    $errors['pwd']=pwd($user['pwd'],8,20)?'':"Password must be 8 and 20.";
    $errors['zcode']=is_text($user['zcode'],5,5)?'':"Zipcode must be 5.";

    $valid=in_array(user['option'],$options);

    $errors['option']=$valid?'':"You must choose one of each.";
    $errors['terms']=$users['terms']?'':"You must agree to the terms";

    $invalid=implode($errors);
    $invalid?$message="Please correct the following erros: ":$message='Your data was valid';

}

?>

<?php include 'includes/header.php';?>
<?=htmlspecialchars($message)?>
<form action="validate-form.php" method='POST'>
    <label for="email">E-mail</label>
    <input type="email" name="email"></br></br>
    <label for="password">Password</label>
    <input type="password" name="password" value="<?=htmlspecialchars($user['pwd'])?>"></br>
    <span><?=$error['pwd']?></span></br></br>
    <label for="fname">First name</label>
    <input type="text" name="fname" value="<?=htmlspecialchars($user['fname'])?>"></br>
    <span><?=$error['fname']?></span></br></br>
    <label for="lname">Last name</label>
    <input type="text" name="lname" value="<?=htmlspecialchars($user['lname'])?>"></br>
    <span><?=$error['lname']?></span></br></br>
    <label for="mobile">Mobile</label>
    <input type="text" name="mobile"></br></br>
    <label for="address1">Address 1</label>
    <input type="text" name="address1"></br></br>
    <label for="address2">Address 2</label>
    <input type="text" name="address2"></br></br>
    <label for="zipcode">Zip Code</label>
    <input type="text" name="zipcode" value="<?=htmlspecialchars($user['zcode'])?>"></br>
    <span><?=$error['zcode'];?></span></br>
    <label for="country">Country</label>
    <select name="country" id="country">
        <optgroup label="Asia">
            <option value="southkorea">South Korea</option>
            <option value="japan">Japan</option>
            <option value="northkorea">NorthKorea</option>
            <option value="china">China</option>
            <option value="taiwan">Taiwan</option>
            <option value="vietnam">Vietnam</option>
            <option value="indonesia">Indonesia</option>
            <option value="laos">Laos</option>
        </optgroup>
        <optgroup label="Europe">
            <option value="france">France</option>
            <option value="italia">Italia</option>
            <option value="germany">Germany</option>
            <option value="spain">Spain</option>
            <option value="Portugal">Portugal</option>
        </optgroup>
        <optgroup label="North America">
            <option value="usa">USA</option>
            <option value="canada">Canada</option>
            <option value="mexico">Mexico</option>
        </optgroup>
    </select></br></br>
    <label for="option">Preference :
        <?php foreach($options as $option){?>
            <?=$option?> &nbsp; <input type="radio" name="option" value="<?=$option?>" <?php $user['option']==$option?'checked':''?>>
        <?php } ?>
    </label></br>
    <?=$error['option']?></br></br>
    <p>
        <input type="checkbox" name="terms" value="true" <?=$user['terms']?'checked':''?>> &nbsp;
        I agree to the terms and conditions.
    </p>
    <input type="submit" value="Save">
</form>
<?php include 'includes/footer.php';?>