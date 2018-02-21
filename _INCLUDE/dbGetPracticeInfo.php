<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 16/06/2016
 * Time: 03:51
 */

//require("dbConnect.php");
$sqlQuery = "SELECT cabinet.raison, cabinet.adresse_mail, cabinet.numtel_fixe, cabinet.numtel_mobile, adresse.adresse, adresse.adresse2, adresse.boite_postale, adresse.ville, adresse.pays FROM adresse, cabinet WHERE adresse.ID=(SELECT cabinet.ID FROM cabinet WHERE ID=\"1\");";

$stmt = $conGCD->prepare($sqlQuery);

$stmt->execute();
$resCabinet = $stmt->fetch();