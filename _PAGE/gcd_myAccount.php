<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 06/06/2016
 * Time: 00:09
 */
    require("../_INCLUDE/dbGetFullProfile.php");
    //require("../_INCLUDE/dbGetPracticeInfo.php");
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
<?php require("../_INCLUDE/dbModifyPassword.php"); ?>
<div class="global">
    <div class="titlebar">
        <?php include("../_DIV/divGCDtitlebar_def.php");?>
    </div>

    <!-- MENU -->
    <div class="sidebar">

      <?php

      $mode=$_GET['mode'];
      switch ($mode)
      {
          case "norm": {
              include("../_DIV/divGCDsidebar.php");
              break;
          }
          case "admin": {
              include("../_DIV/divGCDsidebarAdmin.php");
              break;
          }
      }

      ?>
    </div>

    <div class="body">
        <?php include("../_DIV/divGCDbody_myAccount.php"); ?>
        <a href="">
            <img src="../_ASSETS/Gnome-View-Refresh-48.png" width="24"/>Modifier les informations du compte</a>
        <a href="./_OPERATION/generatePrintable.php?page=myAccount<?php echo "&login=".$_GET['login']."&pass=".$_GET['pass']?>">
            <img src="../_ASSETS/Gnome-Printer-Printing-64.png" width="24"/>Version imprimable</a>
    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>
