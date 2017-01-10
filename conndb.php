<?php
/**
 * Created by PhpStorm.
 * User: mamour
 * Date: 24/12/16
 * Time: 11:00
 */
try{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=STATESP', 'root', 'Lafamillefaye0', $pdo_options);
$reponse = $bdd->query('SELECT * FROM EffectifDesFemmes'); ?>
<table>
    <thead>
    <tr>
        <th>Departement</th>
        <th>Effectifs</th>
        <th>Hommes</th>
        <th>Femmes</th>
        <th>% Des Femmes</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($donnees = $reponse->fetch()) {
        ?>
        <tr>
            <td><?php echo $donnees['DEPARTEMENT'] ?></td>
            <td><?php echo $donnees['EFFECTIFS'] ?></td>
            <td><?php echo $donnees['HOMMES'] ?></td>
            <td><?php echo $donnees['FEMMES'] ?></td>
            <td><?php echo $donnees['% DES FEMMES'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
    <?php }
    catch (Exception $e) {
        die ('Erreur : ' . $e->getMessage());
    } ?>
</table>
