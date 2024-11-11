<?php include '../includes/sessions2.php';?>
<?php 
    if($logged_in){ 
        header('Location: account.php');
        exit; //when user is already logged in, automactically redirects to account page.
    }

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $Emailsended=$_POST['id'];
        $Pwdsended=$_POST['pwd'];

        if($Emailsended===$email&&$Pwdsended===$password){
            login();
            header('location: account.php'); //if user's inputs correspond to saved data, it redirects to account page. [successfully logged in.]
        }
        else{?>
            <script>alert('id or password is not correct')</script>
        <?php }
    }
?>

<?php include '../includes/header.php';?>
<form action='login.php' method='POST'>
    <div>
        <label for='id'>ID</label>
        <input type='text' name='id'>
    </div>
    <div>
        <label for='pwd'>Password</label>
        <input type='password' name='pwd'>
    </div>
    <input type='submit' value='Sign In' />
</form>
<?php include '../includes/footer.php';?>