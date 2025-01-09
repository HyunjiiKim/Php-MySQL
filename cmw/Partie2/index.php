<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Web_Dynamique_KIM_Hyunji_MERCI EDSON !</title>
</head>
<body>
    <form method='POST' action='validate_registration.php'>
        <div class='input_group'>
                <label for='email'>E-mail</label>
                <input type="email" name='email'>
        </div>
        <div class='input_group'>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="">
        </div>
        <div class='input_group'>
            <label for='lname'>Nom<label>
            <input type="text" name='lname'>
        </div>
        <div class='input_group'>
            <label for="fname">Prénom</label>
            <input type="text" name='fname'>
        </div>
        <div class='input_group'>
            <label for="bdate">Date de naissance</label>
            <input type="date" name="bdate">
        </div>
        <div class='input_group'>
            <label for="sex">Sexe</label>
            <p><input type="radio" name="sex" value="male">Homme</p>
            <p><input type="radio" name="sex" value="female">Femme</p>
            <p><input type="radio" name="sex" value="others">Autre</p>
        </div>
        <div class='input_group'>
            <label for="nationality">Nationalité</label>
            <input type="text" name="nationality">
        </div>
        <div class='input_group'>
            <label for="address">Adresse</label>
            <textarea name="address"></textarea>
        </div>
        <div class='input_group'>
            <label for="city">Ville</label>
            <input type="text" name="city">
        </div>
        <div class='input_group'>
            <label for="zipcode">Code postale</label>
            <input type="text" name="zipcode">
        </div>
        <div class='input_group'>
            <label for="interests">Matières préférées</label>
            <select name="interests" id="">
                <option value="">Choisissez-en</option>
                <option value="php">PHP</option>
                <option value="dynamicWeb">Web dynamique</option>
                <option value="db">BDD</option>
                <option value="htmlCss">HTML/CSS</option>
                <option value="javascript">Javascript</option>
                <option value="english">Anglais</option>
                <option value="projectManagement">Conduite de projet</option>
                <option value="UX Design">UX Design</option>
            </select>
        </div>
        <div class='input_group'>
            <label for="dualDegree">Double Diplôme ?</label>
            <input type="checkbox" name="dualdegree" value='true'>
        </div>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>