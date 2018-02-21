<?php
/**
 * Created by PhpStorm.
 * User: Lamyaa
 * Date: 16/06/16
 * Time: 12:00
 */
require("../../_INCLUDE/dbGetFullProfile.php");

echo "
     <div class=\"prt\">
        <h3>Informations personnelles du compte [".$login."]</h3>
        <table>
            <tr>
                <td width=192><b>Nom :</b></td>
                <td >".$result['nom']."</td>
            </tr>
            <tr>
                <td width=192><b>Prénom :</b></td>
                <td >".$result['prenom']."</td>
            </tr>
            <tr>
                <td width=192><b>Date de naissance :</b></td>
                <td >".$result['date_naissance']."</td>
            </tr>
            <tr>
                <td width=192><b>CIN :</b></td>
                <td >".$result['nss']."</td>
            </tr>
            <tr>
                <td width=192><b>Num tél. fixe :</b></td>
                <td >".$result['numtel_fixe']."</td>
            </tr>
            <tr>
                <td width=192><b>Num tél. mobile :</b></td>
                <td >".$result['numtel_mobile']."</td>
            </tr>
            <tr>
                <td width=192><b>Adresse mail :</b></td>
                <td >".$result['email']."</td>
            </tr>
        </table>
     </div>
        ";