<?php
include("connexion_bdd.php");
/**
 * Created by PhpStorm.
 * User: BigAthepa
 * Date: 27/12/2016
 * Time: 12:50
 */
$reponse = $bdd->query('SELECT * FROM Admin');
$donnees = $reponse->fetch();
if (isset($_POST['password']) AND $_POST['password'] == $donnees['PassWord'])
// Si le mot de passe est bon
{
    // On affiche le mail
    header('location:effectifs.php');
    ?>


    <?php
}
else // Sinon, on affiche un message d'erreur
{
    header('location:login.php');
}
?>
