<?php
/**
 * Created by PhpStorm.
 * User: BigAthepa
 * Date: 10/01/2017
 * Time: 12:19
 */
include("connexion_bdd.php");
if (isset($_POST['Departement'])) 
{
    if (isset($_POST['OptionForm'])) {
        if (isset($_POST['Formation'])) {
            if (isset($_POST['Sexe'])) {
                if (isset($_POST['Age'])) {
                    if (isset($_POST['Nationalite'])) {
                        $reponse = $bdd->prepare('SELECT  OptionForm , Formation , Civilite  , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE Formation = ? ' );
                        $reponse->execute(array($_POST['Formation']));

                        var_dump($reponse->fetchAll());
                        
                        //$donnees = $reponse->fetch();
                    } else {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND
                                                      Formation :=' . $_POST['Formation'] . ' AND
                                                      Civilite :=' . $_POST['Sexe'] . ' AND
                                                      AGE :=' . $age);
                        $donnees = $reponse->fetch();
                    }
                } else {
                    if (isset($_POST['Nationalite']) != null) {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND
                                                      Formation :=' . $_POST['Formation'] . ' 
                                                      Civilite :=' . $_POST['Sexe'] . ' 
                                                      Nationalite :=' . $_POST['Nationalite']);
                        $donnees = $reponse->fetch();
                    } else {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND
                                                      Formation :=' . $_POST['Formation'] . ' 
                                                      Civilite :=' . $_POST['Sexe']);
                        $donnees = $reponse->fetch();
                    }
                }
            } else {
                if (isset($_POST['Age']) != null) {
                    if (isset($_POST['Nationalite']) != null) {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND
                                                      Formation :=' . $_POST['Formation'] . ' 
                                                      AGE :=' . $age . '
                                                      Nationalite :=' . $_POST['Nationalite']);
                        $donnees = $reponse->fetch();
                    } else {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND
                                                      Formation :=' . $_POST['Formation'] . '
                                                      AGE :=' . $age);
                        $donnees = $reponse->fetch();
                    }
                } else {
                    if (isset($_POST['Nationalite']) != null) {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND
                                                      Formation :=' . $_POST['Formation'] . ' 
                                                      Nationalite :=' . $_POST['Nationalite']);
                        $donnees = $reponse->fetch();
                    } else {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND
                                                      Formation :=' . $_POST['Formation']);
                        $donnees = $reponse->fetch();
                    }
                }
            }
        } else {
            if (isset($_POST['Sexe']) != null) {
                if (isset($_POST['Age']) != null) {
                    if (isset($_POST['Nationalite']) != null) {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND
                                                      Civilite :=' . $_POST['Sexe'] . ' AND 
                                                      AGE :=' . $age . ' AND
                                                      Nationalite :=' . $_POST['Nationalite']);
                        $donnees = $reponse->fetch();
                    } else {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND 
                                                      Civilite :=' . $_POST['Sexe'] . ' AND
                                                      AGE :=' . $age);
                        $donnees = $reponse->fetch();
                    }
                } else {
                    if (isset($_POST['Nationalite']) != null) {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND 
                                                      Civilite :=' . $_POST['Sexe'] . ' AND
                                                      Nationalite :=' . $_POST['Nationalite']);
                        $donnees = $reponse->fetch();
                    } else {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND
                                                      Civilite :=' . $_POST['Sexe']);
                        $donnees = $reponse->fetch();
                    }
                }
            } else {
                if (isset($_POST['Age']) != null) {
                    if (isset($_POST['Nationalite']) != null) {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND
                                                      AGE :=' . $age . ' AND
                                                      Nationalite :=' . $_POST['Nationalite']);
                        $donnees = $reponse->fetch();
                    } else {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND
                                                      AGE :=' . $age);
                        $donnees = $reponse->fetch();
                    }
                } else {
                    if (isset($_POST['Nationalite']) != null) {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement'] . ' AND
                                                      Formation :=' . $_POST['Formation'] . ' AND
                                                      Nationalite :=' . $_POST['Nationalite']);
                        $donnees = $reponse->fetch();
                    } else {
                        $date = new DateTime();
                        $age = $date - $_POST['Age'];
                        $reponse = $bdd->query('SELECT  OptionForm , Formation , Civilite , Naissance , Nationalite 
                                                FROM EffectifPriveDGI2016
                                                WHERE DEPARTEMENT :=' . $_POST['Departement']);
                        $donnees = $reponse->fetch();
                    }
                }
            }
        }
    } else {

    }
} else // Sinon, on affiche un message d'erreur
{
    header('location:login.php');
}
?>