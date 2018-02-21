<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 16/06/2016
 * Time: 05:11
 */
require("dbConnect.php");
$err=false;
/*
if ($_GET['success']==true)
{
                echo "<div class=successmsg><br>
                <span class=\"icon\"><img src=\"../_ASSETS/Gnome-Emblem-Default-64.png\" width=\"32\"/></span>
                <br>Mot de passe changé !<br><br></div>";
}*/

if($_SERVER["REQUEST_METHOD"]=="POST") {
    if ((!empty($_POST['t_password']) OR !empty($_POST['t_newpassword']) OR !empty($_POST['t_newpassword_rep'])))
    {
        if (strcmp(sha1($_POST['t_password']),$_GET['pass'])==0)
        {
            if (strcmp($_POST['t_newpassword'],$_POST['t_newpassword_rep'])==0)
            {
                $sqlQuery =
                    "UPDATE users SET pass=:pass WHERE login=:login";

                $t_pass =sha1($_POST['t_newpassword']);

                $stmt = $conGCD->prepare($sqlQuery);
                $stmt->bindParam(":login", $_POST['t_login']);
                $stmt->bindParam(":pass",  $t_pass);
                $stmt->execute();
                header("location:../_PAGE/gcd_myAccount.php?login=".$_GET['login']."&pass=".$t_pass."&mode=".$_GET['mode']);
            }
            else
            {
                $err=true;
                if ($err) {
                echo "<div class=errormsg><br>
                <span class=\"icon\"><img src=\"../_ASSETS/Gnome-Error.png\" width=\"32\"/></span>
                <br>Les deux mots de passe sont différents !<br><br></div>";}
            }

        }
        else
        {
                $err=true;
                echo "<div class=errormsg><br>
                <span class=\"icon\"><img src=\"../_ASSETS/Gnome-Error.png\" width=\"32\"/></span>
                <br>L'ancien mot de passe est erroné !<br><br></div>";
        }
    }
    else
        {

                echo "<div class=errormsg><br>
                <span class=\"icon\"><img src=\"../_ASSETS/Gnome-Error.png\" width=\"32\"/></span>
                <br>Veuillez verifier que les champs sont remplis !<br><br></div>";
        }
}
