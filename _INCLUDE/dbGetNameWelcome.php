<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 07/06/2016
 * Time: 15:58
 */

require("dbConnect.php");
$sqlQuery =
    "SELECT nom, prenom FROM profil
          WHERE ID=(SELECT ID FROM admin
                    WHERE ID= (SELECT ID FROM users
                                WHERE login=:login AND pass=:pass))";

$stmt = $conGCD->prepare($sqlQuery);
$stmt->bindParam(":login", $_COOKIE['login']);
$stmt->bindParam(":pass",  $_COOKIE['pass']);

$stmt->execute();
$result = $stmt->fetch();

if (!$result>0)
{
    echo "<div class=errormsg>Erreur de connexion</br></div>";
    header("location:../main.php");
}