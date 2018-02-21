<?php
/**
 * Created by PhpStorm.
 * User: Lamyaa
 * Date: 17/06/16
 * Time: 12:01
 *
 */?>
<div class="search">
    <span class="btext">Recherche de patient par Nom/Prenom</span>
    <form action="" method="POST" accept-charset="utf-8">

        <table>
            <tr>
                <td width="64">
                    Nom :
                </td>
                <td width="192">
                    <input name="t_nom" type="text" size="16" maxlength="32" <?php if ($error) echo "disabled";?>/>
                </td>
                <td width="64">
                    Prenom :
                </td>
                <td width="192">
                    <input name="t_prenom" type="text" size="16" maxlength="32" <?php if ($error) echo "disabled";?>/>
                </td>
                <td width="192">
                    <button type="submit">
                        <img src="../../_ASSETS/Gnome-Search.png" width="24"/>
                        <span class="stext">Chercher</span>
                    </button>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <input type="radio" name="typeS" value="absolute"> Exact<br>

                    <input type="radio" name="typeS" value="approx"> Approximatif<br>

                    <input type="radio" name="typeS" value="contain" checked> Contient<br>
                </td>
            </tr>
        </table>
        </form>

</div>
if
<?php include("../../_INCLUDE/_ISEARCH/dbSearchPatientByName.php");
?>
