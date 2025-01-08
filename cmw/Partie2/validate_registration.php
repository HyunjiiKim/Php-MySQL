<?php

$error_list=[];
$cmw_students=[];

if($_SERVER['REQUEST_METHOD']==='POST'){

/* Question 1 */
    /* Validation les champs requis */
    if (empty($_POST['email'])) $error_list[] = 'Erreur ! Remplissez votre e-mail';
    if (empty($_POST['password'])) $error_list[] = 'Erreur ! Remplissez votre mot de passe';
    if (empty($_POST['fname'])) $error_list[] = 'Erreur ! Remplissez votre prénom';
    if (empty($_POST['lname'])) $error_list[] = 'Erreur ! Remplissez votre nom de famille';
    if (empty($_POST['bdate'])) $error_list[] = 'Erreur ! Remplissez votre date de naissance';
    if (empty($_POST['sex'])) $error_list[] = 'Erreur ! Remplissez votre sexe';
    if (empty($_POST['nationality'])) $error_list[] = 'Erreur ! Remplissez votre nationalité';
    if (empty($_POST['address'])) $error_list[] = 'Erreur ! Remplissez votre adresse postale';
    if (empty($_POST['city'])) $error_list[] = 'Erreur ! Remplissez votre ville de résidence';
    if (empty($_POST['zipcode'])) $error_list[] = 'Erreur ! Remplissez votre code postal';
    if (empty($_POST['interests'])) $error_list[] = 'Erreur ! Remplissez votre matière préférée';
    if (empty($_POST['dualdegree'])) $error_list[] = 'Erreur ! Cochez le cas de double diplôme';


    /* Éviter la double saisie d'une même addresse de mail */
    if(isset($cmw_student) && $cmw_students['email'] === $_POST['email']){
        $error_list .= 'Erreur ! L\'adresse de mail est déjà existant.';
    }

    if($error_list){
        echo '<ul style="color:red; list-style-type:none;">';
        foreach($error_list as $error){
            echo "<li>$error</li>";
        }
        echo '</ul>';      
    }
    
  /* Question 2 */
  if(empty($error_list)){
    $cmw_students['email'] = $_POST['email'];
    $cmw_students['password'] = $_POST['password'];
    $cmw_students['fname'] = $_POST['fname'];
    $cmw_students['lname'] = $_POST['lname'];
    $cmw_students['bdate']=$_POST['bdate'];
    $cmw_students['sex']=$_POST['sex'];
    $cmw_students['nationality']=$_POST['nationality'];
    $cmw_students['address']=$_POST['address'];
    $cmw_students['city']=$_POST['city'];
    $cmw_students['zipcode']=$_POST['zipcode'];
    $cmw_students['interests']=$_POST['interests'];
    $cmw_students['dualdegree']=$_POST['dualdegree'];
  };

  /* Question 3 */
  if(empty($error_list)){
    session_start();
    $_SESSION['cmw_students'] = $cmw_students;
    header('Location: my_account.php');
    exit;
  };
};

?>