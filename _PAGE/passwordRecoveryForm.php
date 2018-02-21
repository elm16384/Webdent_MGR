<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 06/06/2016
 * Time: 00:09
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_STYLE/stlRecover.css" title="" type="text/css" media="screen" charset="utf-8">
    <title>
        Formulaire de reinitialisation de mot de passe
    </title>
</head>
<body>
<?php require("..\_INCLUDE\dbValidateRecovery.php");?>
<div class="titlebar">
    <p>
        <span class="btext">WEBDENT MANAGER v0.1</span>
    </p>
</div>
<div class="body">
</br>
<p>
    <span class="icon"><img src="../_ASSETS/Gnome-View-Refresh-48.png"/></span></br>
    Veuillez fournir votre login et adresse MAIL
</p>

<div class="formRecover">
    <form action="" method="POST" accept-charset="utf-8">
        <table border="0" align="center" cellpadding="16">
            <tr>
                <td align="left">
                    LOGIN :</br></br>
                    ADRESSE MAIL :
                </td>

                <td width="320">
                    <input name="t_login" type="text" size="32" maxlength="32" /></br></br>
                    <input name="t_mail" type="text" size="32" maxlength="32"  />
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <button type="submit">
                        <img src="../_ASSETS/Dialog-Apply-48.png" />
                    </button>
                    <button type="reset">
                        <img src="../_ASSETS/Gnome-Window-Close-48.png" />
                    </button>
                </td>
            </tr>
            <tr>
                <td width="320" colspan="2">
                    En appuyant sur envoyer, vous allez recevoir un lien vers le formulaire de resaisie de mot de passe.
                    <br><br><a href="..\main.php">Retour vers la page principale.</a>
                </td>
            </tr>

        </table>
    </form>
</div>
</div>

</body>
</html>