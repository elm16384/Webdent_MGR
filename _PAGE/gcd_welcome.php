<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 06/06/2016
 * Time: 00:09
 */
    require("../_INCLUDE/dbConnect.php");
    /*session_commit();
    echo var_dump($_GET);*/
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


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../_STYLE/stlGCDwelcome.css" title="" type="text/css" media="screen" charset="utf-8">
    <title>
        <?php echo "[WEBDENT MANAGER] [Bienvenu, ".$result['nom']." ".$result['prenom']."]"; ?>
    </title>
    <script type="text/javascript" src="../_SCRIPT/redirect.js"></script>
</head>
<body>
<script type="text/javascript">
    setTimeout('rediriger("./gcd_mgr_in.php" )',2000);
</script>
<div class=successmsg>
    <span class=btext>WEBDENT MANAGER</span><br>
    <span class=mtext>Bienvenu, <?php echo $result['nom']." ".$result['prenom']." !"?></span><br>

    <p>Vous seriez redirigé automatiquement, ou <a href="./gcd_mgr_in.php">
            Cliquez ici</a> pour procéder au menu principal.</a></p>
    <!--<li><a href="./gcd_mgr_in.php?>"Cliquez ici</a> pour procéder au menu principal.</li>
    <br>
    <li><a href="./gcd_mgr_in.php<?php /*echo "?login=".$_GET['login']."&pass=".$_GET['pass']."&mode=admin"*/ ?>"Cliquez ici</a> pour procéder au mode administrateur.</li>
    </ul>-->
    <br><br>
</div>
</body>
</html>