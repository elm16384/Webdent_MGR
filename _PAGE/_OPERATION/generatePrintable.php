<?php
/**
 * Created by PhpStorm.
 * User: Lamyaa
 * Date: 16/06/16
 * Time: 11:45
 * Génere un document html simple pour impression
 */
$current_page=$_GET['page'];
$login=$_GET['login'];
$pass=$_GET['pass'];

echo "<htlml>
        <head>
        <link rel=\"stylesheet\" href=\"printStyle.css\" type=\"text/css\" charset=\"utf-8\">
        <meta charset=\"UTF-8\">
        <title>Imprimé de la page [".$current_page."]</title>
        </head>
            <body>";
//START HTML

switch($current_page)
{
    case "myAccount" : {
        include("gpMyAccount.php");
        break;}

    case "info" : {
        include("gpInfo.php");
        break;}

}

//END HTML
echo "</body>
</html>";