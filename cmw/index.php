<?php include './includes/header.php';?>
<form action='./includes/validation.php' method='POST' >
    <section>
        <label for='sex'>Civilité</label>
        <p>
            <input type='radio' name='sex' value='m'>Monsieur
        </p>
        <p>
            <input type='radio' name='sex' value='f'>Madame
        </p>
    </section>
    <section>
        <label for='fname'>Prénom</label>
        <input type='text' name='fname'>
        <label for='lname'>Nom de famille</label>
        <input type='text' name='lname'>
    </section>
    <section>
    <label for='emailId'>E-mail</label>
    <input type='text' name='emailId'>
    @
    <select name='emailSv'>
        <option value=''>Choisissez-en</option>
        <option value='gmail'>gmail.com</option>
    </select>
    </section>
    <section>
    <label for='password1'>Mot de passe</label>
    <input type='password' name='password1'>
    <label for='password2'>Confirmer mot de passe</label>
    <input type='password' name='password2'>
    </section>
    <section>
        <label for='interest[]'>Vos Intérêts</label>
        <p><input type='checkbox' name='interest[]' value='music'>Musique</p>
        <p><input type='checkbox' name='interest[]' value='litterature'>Littérature</p>
        <p><input type='checkbox' name='interest[]' value='pc'>Informatique</p>
        <p><input type='checkbox' name='interest[]' value='game'>Jeux vidéos</p>
    </section>
    <p>
        <input type='checkbox'>
        Je suis d'accord avec les termes et conditions
    </p>
    <input type='submit' value='Enregistrer'>
</form>
<?php include './includes/footer.php';?>