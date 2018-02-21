<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 06/06/2016
 * Time: 00:09
 */
    require("../_INCLUDE/dbGetNameWelcome.php");
    require("../_INCLUDE/dbGetPracticeInfo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../_STYLE/stlGCDmgr.css" title="" type="text/css" media="screen" charset="utf-8">
    <meta charset="UTF-8">
    <title>
        <?php echo "[WEBDENT MANAGER] [Bienvenu, ".$result['nom']." ".$result['prenom']."]"; ?>
    </title>
</head>
<body>
<div class="global">
    <div class="titlebar">
      <?php include("../_DIV/divGCDtitlebar_def.php");?>
    </div>

    <!-- MENU -->
    <div class="sidebar">

      <?php
              include("../_DIV/divGCDsidebarAdmin.php");

      ?>
    </div>

    <div class="body">
        <?php include("../_DIV/divGCDbody_in.php"); ?>

        <a href=""><img src="../_ASSETS/Gnome-View-Refresh-48.png" width="24"/>Modifier les informations du cabinet</a><br>
        <a href="./_OPERATION/generatePrintable.php?page=info?>">
            <img src="../_ASSETS/Gnome-Printer-Printing-64.png" width="24"/>Version imprimable</a>
    </div>

    <div class="footer">

    </div>
</div>
</body>
</html>
