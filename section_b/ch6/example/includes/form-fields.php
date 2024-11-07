<label for="email">E-mail</label>
<input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>"><br><br>

<label for="password">Password</label>
<input type="password" name="password" value="<?= htmlspecialchars($user['pwd']) ?>"><br>
<span><?= htmlspecialchars($errors['pwd']) ?></span><br><br>

<label for="fname">First name</label>
<input type="text" name="fname" value="<?= htmlspecialchars($user['fname']) ?>"><br>
<span><?= htmlspecialchars($errors['fname']) ?></span><br><br>

<label for="lname">Last name</label>
<input type="text" name="lname" value="<?= htmlspecialchars($user['lname']) ?>"><br>
<span><?= htmlspecialchars($errors['lname']) ?></span><br><br>

<label for="mobile">Mobile</label>
<input type="text" name="mobile" value="<?= htmlspecialchars($user['mobile']) ?>"><br><br>

<label for="address1">Address 1</label>
<input type="text" name="address1" value="<?= htmlspecialchars($user['adrs1']) ?>"><br><br>

<label for="address2">Address 2</label>
<input type="text" name="address2" value="<?= htmlspecialchars($user['adrs2']) ?>"><br><br>

<label for="zipcode">Zip Code</label>
<input type="text" name="zipcode" value="<?= htmlspecialchars($user['zcode']) ?>"><br>
<span><?= htmlspecialchars($errors['zcode']) ?></span><br><br>

<label for="country">Country</label>
<select name="country" id="country">
    <optgroup label="Asia">
        <option value="southkorea" <?= ($user['country'] == 'southkorea') ? 'selected' : '' ?>>South Korea</option>
        <option value="japan" <?= ($user['country'] == 'japan') ? 'selected' : '' ?>>Japan</option>
    </optgroup>
    <optgroup label="Europe">
        <option value="france" <?= ($user['country'] == 'france') ? 'selected' : '' ?>>France</option>
    </optgroup>
</select><br><br>

<label for="option">Preference:</label><br>
<?php foreach ($options as $option) { ?>
    <?= htmlspecialchars($option) ?>
    <input type="radio" name="option" value="<?= htmlspecialchars($option) ?>" <?= ($user['option'] == $option) ? 'checked' : '' ?>><br>
<?php } ?>
<span><?= htmlspecialchars($errors['option']) ?></span><br><br>

<p>
    <input type="checkbox" name="terms" value="true" <?= $user['terms'] ? 'checked' : '' ?>> &nbsp;
    I agree to the terms and conditions.
</p>
<span><?= htmlspecialchars($errors['terms']) ?></span><br><br>
