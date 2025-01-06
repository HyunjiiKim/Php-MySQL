<?php
/* Question 1 */
/* method et action  */
/* Question 2 */
/* text, email, password  */
/* Question 3 */ 
?>
<form action='verify.php' method='POST'> <!-- contenus de formulaire --> </form> 
<?php
/* Question 4 */ 
?>
<form method='GET'>
  <label for='firstname'>*Nom :
       <input type='text' name='firstname'>
  </label>
  <label for='prenom'>*Prénom :
       <input type='text' name='prenom'>
  </label>

<label for='email'>*Email :
       <input type='email' name='email'>
</label>
<input type='submit' value='Envoyer'>
</form>

<?php
/* Question 5 */
if($_SERVER['REQUEST_METHOD']==='POST'){
    var_dump($_POST['firstname'], $_POST['lastname'], $_POST['email']);
};
/* Question 6 */
function died($error){
    echo "<p style='color: red;'>Des erreurs ont été détectées : <br><br>".$error."</p>";
    echo "<br><br><a href='index.php'>retour au formulaire</a>";
 }
 
/* Question 7 */
/* POST car c'est plus sécurisée que la method GET que les informations sont affichées sur le URL alors que 
POST permet d'enregistrer les informations dans le head. */
/* Question 8 */
$my_array = array('jose', 'remy', 'edson', 'george', 'patrick');
var_dump($my_array[2]);
//ou
print_r($my_array[2]);

/* Question 9 */
/* || signfiie 'ou'. Par exemple, 
if ($a > 2 || $b > 2 )  signifie que si $a est supérieur à 2 ou $b est supérieur à 2, alors on exécute le code qui suit.
D'un autre cas, il retourn TRUE si l'une des conditions est vraie.
*/

/* Question 10 */?>
<table>
    <?php for($i=1; $i<10; $i++){?>
    <tr>
        <td>8</td>
        <td>*</td>
        <td><?=$i?></td>
        <td>=</td>
        <td><?=8*$i?></td>
    </tr>
    <?php }; ?>
</table>
