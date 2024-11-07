<?php include "includes/header.php";?>

<form id="signupForm" action="collecting-form-data-rev.php" method="POST">
    <fieldset>
        <legend>Sign up with your email address</legend>
        <input type="text" id="email_c" name="email" placeholder="Email"></br>
        <input type="text" id="email_c" placeholder="Confirm email"></br>
        <input type="password" id="pwd" name="pwd" placeholder="Password"></br>
        <input type="password" id="pwd_c" name="pwd_c" placeholder="Confirm password"></br>
        <label for="birth">Date of birth</label></br>
        <div style="display: flex;">
            <select name="birth">
                <option value="">Januaray</option>
                <option value="">Feburary</option>
                <option value="">March</option>
                <option value="">April</option>
                <option value="">May</option>
                <option value="">June</option>
                <option value="">July</option>
                <option value="">August</option>
                <option value="">September</option>
                <option value="">October</option>
                <option value="">November</option>
                <option value="">December</option>
            </select>
            <input type="text" placeholder="Day">
            <input type="text" placeholder="Year">
        </div>
        <div style="display: flex;">
            <input type="radio" name="sex" value="1">&nbsp;Male&nbsp;
            <input type="radio" name="sex" value="2">&nbsp;Female&nbsp;
            <input type="radio" name="sex" value="3">&nbsp;Non-binary&nbsp;
        </div>
        <p>
        <input type="checkbox" name="term">
        Share my registration data with Musee's content providezrs for marketing purposes.
        </p>
    </fieldset>
    <input type="submit" value="SIGN UP">
</form>
<script src="src/js/notMatch.js"></script>

<?php include "includes/footer.php";?>