<?php include "includes/header.php";?>
<form action="collecting-form-data.php" method="POST">
    <fieldset>
        <legend>Personal Information</legend>
            <label for="fname">First name</label>
            <input name="fname" type="text">
            <label for="lname">Last name</label> 
            <input name="lname" type="text">
            <label for="bdate">Birth Date</label>
            <input name="bdate" type="date">
            <label for="email">E-mail</label>
            <input name="email" type="email">
            <label for="password">Password</label>
            <input name="password" type="password">
    <fieldset>
        <legend>Music</legend>
        <p>
            <input type="radio" name="music" value="Pop">&nbsp;
            Pop&nbsp;
            <input type="radio" name="music" value="Hip-hop">&nbsp;
            Hip-hop&nbsp;
            <input type="radio" name="music" value="R&B">&nbsp;
            R&B&nbsp;
            <input type="radio" name="music" value="Reggae">&nbsp;
            Reggae&nbsp;
        </p>
    </fieldset>
    <fieldset>
        <legend>Optional</legend>
        <label>How did you get know us?</label>
        <select name="know">
            <option>Your friends or family</option>
            <option>Social Media</option>
            <option>Advertising</option>
            <option>TV</option>
            <option>Others</option>
        </select> 
    </fieldset>
    <p>
        <input type="checkbox" name="terms" value="true">
        I agree to the terms and conditions.
    </p>
    <input type="submit" value="Send">
</form>
<pre><?php var_dump($_POST);?>
<?php include "includes/footer.php";?>