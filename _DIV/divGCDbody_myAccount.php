<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 16/06/2016
 * Time: 04:07
 */
?>
<div class="subdiv">
<form action="" method="POST" accept-charset="utf-8">
<table border="0">
    <span class="btext">Mon compte :</span><br><br>
    <!--  -->
    <tr>
        <td width="240">Login</td>
        <td width="320">
            <input name="t_login" type="text" size="32" value="<?php echo $_COOKIE['login']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="240">Ancien mot de passe</td>
        <td width="320">
            <input name="t_password" type="password" size="32" value=""/><br>
        </td>
    </tr>
    <tr>
        <td width="240">Nouveau mot de passe</td>
        <td width="320">
            <input name="t_newpassword" type="password" size="32" value=""/><br>
        </td>
    </tr>
    <tr>
        <td width="240">Répeter nouveau mot de passe</td>
        <td width="320">
            <input name="t_newpassword_rep" type="password" size="32" value=""/><br>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <button type="submit">
                <img src="../_ASSETS/Gnome-Edit-Redo-32.png" width="24"/><span class="stext">Modifier mot de passe</span>
            </button>
            <br>
        </td>
    </tr>
</table>
</form></div>
<br><br>
<div class="subdiv">
<table border="0">
    <span class="btext">Information personnelles :</span><br><br>
    <!--  -->
    <tr>
        <td width="164">Nom</td>
        <td width="320">
            <input name="t_nom" type="text" size="32" value="<?php echo $result['nom']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="164">Prénom</td>
        <td width="320">
            <input name="t_prenom" type="text" size="32" value="<?php echo $result['prenom']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="164">Date de naissance</td>
        <td width="320">
            <input name="t_date_naissance" type="text" size="32" value="<?php echo $result['date_naissance']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="164">NSS</td>
        <td width="320">
            <input name="t_nom" type="text" size="32" value="<?php echo $result['nss']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="164">Num. tél. fixe</td>
        <td width="320">
            <input name="t_numtel_fixe" type="text" size="32" value="<?php echo $result['numtel_fixe']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="164">Num. tél. mobile</td>
        <td width="320">
            <input name="t_numtel_mobile" type="text" size="32" value="<?php echo $result['numtel_mobile']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="164">Adresse mail</td>
        <td width="320">
            <input name="t_email" type="text" size="32" value="<?php echo $result['email']; ?>" readonly/><br>
        </td>
    </tr>
</table></div>
<br><br>

