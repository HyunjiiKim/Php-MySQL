<?php include './includes/header.php';?>
<form action='#' method='POST' >
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
        <label>Prénom</label>
        <input type='text'>
        <label>Nom de famille</label>
        <input type='text'>
    </section>
    <section>
    <label>E-mail</label>
    <input type='text'>
    @
    <select>
        <option>Choisissez-en</option>
        <option>gmail.com</option>
    </select>
    </section>
    <section>
    <label>Mot de passe</label>
    <input type='password'>
    <label>Confirmer mot de passe</label>
    <input type='password'>
    </section>
    <section>
        <label>Vos Intérêts</label>
        <p><input type='checkbox'>Musique</p>
        <p><input type='checkbox'>Littérature</p>
        <p><input type='checkbox'>Informatique</p>
        <p><input type='checkbox'>Jeux vidéos</p>
    </section>
    <p>
        <input type='checkbox'>
        Je suis d'accord avec les termes et conditions
    </p>
    <input type='submit' value='Enregistrer'>
</form>
<?php include './includes/footer.php';?>