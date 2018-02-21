<?php
/**
 * Created by PhpStorm.
 * User: Lamyaa
 * Date: 17/06/16
 * Time: 13:01
 */
$err=false;
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if(!empty($_POST['t_nom']) || !empty($_POST['t_prenom'])) {

        switch ($_POST['typeS'])
        {
            case "absolute" : {$nom = $_POST['t_nom'];
                $prenom = $_POST['t_prenom']; break;}

            case "approx" : {$nom = $_POST['t_nom'] . "%";
                $prenom = $_POST['t_prenom'] . "%";
                break;
            }
            case "contain" : {$nom = "%".$_POST['t_nom'] . "%";
                $prenom = "%".$_POST['t_prenom'] . "%";
                break;
            }
        }


        $sqlQuery =
            "SELECT ID, nom, prenom, date_naissance FROM profil
        WHERE nom LIKE :nom AND prenom LIKE :prenom";

        $stmt = $conGCD->prepare($sqlQuery);
        $stmt->bindParam(":nom", $nom);
        $stmt->bindParam(":prenom", $prenom);

        $stmt->execute();
        //$resSearch = $stmt->fetch();

        if ($stmt->rowCount()>0) {

            ?>
                <div class=subdiv><span class="mtext">Résultats de recherche</span><br><br>

                <table>
                    <?php while ($row=$stmt->fetch()) {?>
                    <tr>

                        <td width="192"><span class="stext"><?php echo $row['nom']?></span></td>
                        <td width="192"><span class="stext"><?php echo $row['prenom']?></span></td>

                        <span class="icon">
                        <td width="64">
                            <span class="stext">
                            <a href="consultMedical.php?id=<?php echo $row['ID'];?>">
                            <img src="../../_ASSETS/Gnome-Text-X-Generic-64.png" width="24"/>
                            Consulter
                            </a>
                            </span>
                        </td>
                        <td width="64">
                            <span class="stext">
                            <a href="modifyPatientData.php?id=<?php echo $row['ID'];?>">
                                <img src="../../_ASSETS/Gnome-View-Refresh-48.png" width="24"/>
                                Modifier
                            </a>
                            </span>
                        </td>
                        <td width="64">
                            <span class="stext">
                            <a href="removePatientData.php?id=<?php echo $row['ID'];?>">
                                <img src="../../_ASSETS/Gnome-User-Trash-32.png" width="24"/>
                                Retirer
                            </a>
                            </span>
                        </td>
                        </span>
                    </tr>
            <?php } ?>
                </table>

                </div>";

<?php
        }
        else
        {
            ?>
            <div class=subdiv><span class="mtext">
                    Aucun patient trouvés selon les critères choisies.</span><br><br>
                </div>
<?php
        }

    }
}