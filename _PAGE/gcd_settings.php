<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 06/06/2016
 * Time: 00:09
 */
    require("../_INCLUDE/dbGetNameWelcome.php");
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
      <span class=logoutIco>
          <a href="../main.php"><img src="../_ASSETS/Gnome-Application-Exit-48.png" width="32"/>
              <br>Log Out</span></a>
      <span class=mtext>Webdent Manager <?php if ($_GET['mode']=="admin") {echo "[ADMIN]";}?></span>
      <span class=wtext><br>  Bienvenu, <?php echo $result['nom']." ".$result['prenom'] ?> !</span>

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
        <?php include("../_DIV/divGCDbody_patients.php"); ?>
    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>
