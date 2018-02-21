<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 15/06/2016
 * Time: 00:47
 */?>
<span class="btext">Informations du cabinet dentaire :</span><br><br>
<div class="subdiv">
<table border="0">
<!-- cabinet.raison, cabinet.adresse_mail, cabinet.numtel_fixe, cabinet.numtel_mobile, adresse.adresse, adresse.adresse2,
adresse.boite_postale, adresse.ville, adresse.pays -->
    <tr>
        <td width="164">Raison sociale</td>
        <td width="320">
            <input name="t_raison" type="text" size="32" value="<?php echo $resCabinet['raison']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="164">Adresse</td>
        <td width="320">
            <input name="t_addr" type="text" size="64" value="<?php echo $resCabinet['adresse']; ?>" readonly/>
        </td>
    </tr>
    <tr>
        <td width="164">Adresse 2</td>
        <td width="320">
            <input name="t_addr2" type="text" size="64" value="<?php echo $resCabinet['adresse2']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="164">Ville</td>
        <td width="320">
            <input name="t_ville" type="text" size="32" value="<?php echo $resCabinet['ville']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="164">B.P.</td>
        <td width="320">
            <input name="t_bp" type="text" size="15" value="<?php echo $resCabinet['boite_postale']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="164">Pays</td>
        <td width="320">
            <input name="t_pays" type="text" size="32" value="<?php echo $resCabinet['pays']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="164">Adresse E-mail</td>
        <td width="320">
            <input name="t_email" type="text" size="48" value="<?php echo $resCabinet['adresse_mail']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="164">Numéro tel. Fixe</td>
        <td width="320">
            <input name="t_numtelfixe" type="text" size="32" value="0-<?php echo $resCabinet['numtel_fixe']; ?>" readonly/><br>
        </td>
    </tr>
    <tr>
        <td width="164">Numéro tel. Mobile</td>
        <td width="320">
            <input name="t_numtelmobil" type="text" size="32" value="0-<?php echo $resCabinet['numtel_mobile']; ?>" readonly/><br>
        </td>
    </tr>
</table></div><br><br>
