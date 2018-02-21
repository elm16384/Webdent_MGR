<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 07/06/2016
 * Time: 15:53
 */
require_once("./_INCLUDE/dbConnect.php");
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if(!(empty($_POST['t_login']) || empty($_POST['t_password'])))
    {
        $login = $_POST['t_login'];
        $pass = sha1($_POST['t_password']);

        $sqlQuery = "SELECT users.u_mode FROM users WHERE login= :login AND pass = :pass";

        $stmt = $conGCD->prepare($sqlQuery);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':pass', $pass);
        $stmt->execute();

        $result = $stmt->fetch();

        if ($result > 0) {
            //store credentials in cookie
            setcookie("login",$login);
            setcookie("pass",$pass); /*,time()+86400*/
            setcookie("mode",$result['u_mode']);
            echo "<div class=successmsg><br>
            CONNEXION REUSSIE !<br>".var_dump($_POST)."</div>";
            header("location:./_PAGE/gcd_welcome.php");
        } else {
            echo "<div class=errormsg><br>
                <span class=\"icon\"><img src=\"./_ASSETS/Gnome-Error.png\" width=\"32\"/></span>
                <br>Mauvais login ou mot de passe !<br><br></div>";
        }
    }
    else
    {
        if (!$error){
            echo "<div class=errormsg><br>
                <span class=\"icon\"><img src=\"./_ASSETS/Gnome-Error.png\" width=\"32\"/></span>
                <br>Veuillez verifier que les champs sont remplis !<br><br></div>";}
    }
}