<?php
$color = $_COOKIE['color'] ?? null;
$options=['dark','light',];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $color=$_POST['color'];
    setcookie(
        'color',// $name: name of the cookie
        $color,// $value: value of the cookie
        time()+60*2,// $expire: expires in 2 minutes (120 seconds)
        '/',// path: available across entire website
        '', // $domain: empty domain: current domain only (no subdomain)
        false,// $secure: false means can be sent over HTTP (not just HTTPS)
        true // $httpOnly: true means JavaScript cannot access this cookie
    );
}
?>
<?php $scheme =(in_array($color,$options))? $color : $options[0];?>
<?php include '../includes/header.php';?>
<form action='cookie-preferences.php' method='POST'>
    <label for='color'>Select Color Scheme:&nbsp;</label>
    <select name='color'>
        <option value='dark'>Dark</option>
        <option value='light'>Light</option>
        <option value='blue'>Blue</option> <?php //here, if user chooses blue, it returns 'dark' cause blue doesn't exist in arrray $options. (View line 18) ?>
    </select>
    <input type='submit' value='Save'/>
</form>
<br><?= var_dump($_POST['color'])?>
<?php include '../includes/footer.php';?>