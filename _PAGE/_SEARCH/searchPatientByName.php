<?php
/**
 * Created by PhpStorm.
 * User: Lamyaa
 * Date: 16/06/16
 * Time: 13:18
 */

require("../../_INCLUDE/dbGetNameWelcome.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../_STYLE/stlGCDmgr.css" title="" type="text/css" media="screen" charset="utf-8">
    <meta charset="UTF-8">
    <title>
        <?php echo "[WEBDENT MANAGER] [Bienvenu, ".$result['nom']." ".$result['prenom']."]"; ?>
    </title>
</head>
<body>
<div class="global">
    <!--<div class="titlebar">
        <?php //include("../../_DIV/divGCDtitlebar_def.php");?>
    </div>-->

    <!-- MENU -->
    <div class="sidebar">
        <?php
        $mode=$_COOKIE['mode'];
        //switch ($mode) {
            //case "norm": {include($_SERVER['DOCUMENT_ROOT']."/_DIV/divGCDsidebar.php"); break;}
            //include("../../_DIV/_DSEARCH/divGCDsearch.php");
        ?>
    </div>

    <div class="body">
        <?php include("../../_DIV/_DSEARCH/divGCDbody_SearchPatientByName.php"); ?>
    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>

