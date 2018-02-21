<?php
/**
 * Created by PhpStorm.
 * User: Lamyaa
 * Date: 16/06/16
 * Time: 12:48
 */?>
<span class=logoutIco>
          <a href="../main.php"><img src="../_ASSETS/Gnome-Application-Exit-48.png" width="32"/>
              <br>Log Out</span></a>
<span class=mtext>Webdent Manager <?php if ($_COOKIE['mode']=="ADMIN") {echo "[ADMIN]";}?></span>
<span class=wtext><br>  Bienvenu, <?php echo $result['nom']." ".$result['prenom'] ?> !</span>

