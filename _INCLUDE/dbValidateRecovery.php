<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 14/06/2016
 * Time: 02:23
 */
//require("dbConnect.php");
$err=false;
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if(!(empty($_POST['t_login']) || empty($_POST['t_mail']))) {

        if (!filter_var($_POST['t_mail'], FILTER_VALIDATE_EMAIL)) {
            echo "<div class=errormsg><br>
            <span class=\"icon\"><img src=\"../_ASSETS/Gnome-Error.png\" width=\"32\"/></span>
            <br>Adresse email invalide !<br><br></div>";
            $err=true;
        }
        $login = $_POST['t_login'];
        $mail = $_POST['t_mail'];

        $sqlQuery =
            "SELECT profil.email FROM profil WHERE ID=
              (SELECT admin.a_profil FROM admin WHERE admin.a_user=
                (SELECT users.ID FROM users WHERE login=:login))";

        $stmt = $conGCD->prepare($sqlQuery);
        $stmt->bindParam(':login', $login);
        $stmt->execute();

        $result = $stmt->fetch();

        if (strcmp($result['email'], $mail) == 0 && $err==false) {
            //echo var_dump($result);
            echo "<div class=successmsg><br>
            L'adresse E-MAIL saisie est valide !<br>
            Un lien vers le formulaire de resaisie vous sera envoyé à \"" . $mail . "\"!
            </div>";

            //header("location:./_PAGE/gcd_welcome.php?login=".$login."&pass=".$pass);

            /*$to = $mail;
            $subject = "Resaisie de mot de passe";
            $txt = "Veuillez copier le lien suivant dans la barre de navigation"
                    ."";
            $headers = "From: webdentmanager";

            mail($to,$subject,$txt,$headers);*/


        }
        else {
            if ($err==false) {
            echo "<div class=errormsg><br>
            <span class=\"icon\"><img src=\"../_ASSETS/Gnome-Error.png\" width=\"32\"/></span>
            <br>Erreur ! L'adresse E-MAIL \"" . $mail .
                "\" saisie n'est pas attachée au compte \"" . $login . "\" <br><br></div>"; }
        }}


    else
        {
            if (!$error) {
                echo "<div class=errormsg><br>
                <span class=\"icon\"><img src=\"../_ASSETS/Gnome-Error.png\" width=\"32\"/></span>
                <br>Veuillez verifier que les champs sont remplis !<br><br></div>";
            }
        }


}