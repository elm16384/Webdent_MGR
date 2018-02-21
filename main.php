<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 04/06/2016
 * Time: 13:35
 */
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./_STYLE/stlMain.css" title="" type="text/css" media="screen" charset="utf-8">
    <title>WEBDENT MANAGER</title>

</head>
<body>
<?php require("./_INCLUDE/dbAuthentify.php"); ?>
<div class="titlebar">
    <p>
        <span class="btext">WEBDENT MANAGER</span>
        <span class="mtext">Gestionnaire de cabinet dentaire</span>
    </p>
    </div>

    <?php
    include("./_PAGE/loginForm.php");
    ?>

</body>
</html>

