<?php
/**
 * Created by PhpStorm.
 * User: Lamyaa
 * Date: 16/06/16
 * Time: 12:00
 */
require("../../_INCLUDE/dbGetPracticeInfo.php");

echo "
     <div class=\"prt\">
        <h2><b>".$resCabinet['raison']."</b></h2>
        <table>
            <tr>
                <td width=192 colspan=2>".$resCabinet['adresse'].", ".$resCabinet['adresse2'].". "
                    ."<br> B.P.".$resCabinet['boite_postale'].", "
                    .$resCabinet['ville'].", ".$resCabinet['pays']."<br><br></td>
            </tr>
            <tr>
                <td width=96><b>Fixe :</b></td>
                <td >".$resCabinet['numtel_fixe']."</td>
            </tr>
            <tr>
                <td width=96><b>Mobile :</b></td>
                <td >".$resCabinet['numtel_mobile']."</td>
            </tr>
            <tr>
                <td width=96><b>E-mail :</b></td>
                <td >".$resCabinet['adresse_mail']."</td>
            </tr>
        </table>
     </div>
        ";