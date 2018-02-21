<div class="body">
    </br></br>
    <p>
        <span class="icon"><img src="./_ASSETS/Gnome-Video-Display-64.png"/></span></br>
        <span class="logintext">CONNEXION</span></br>
        Veuillez fournir votre login et mot de passe :
    </p>
    <!-- ./_DB/authentify.php -->
    <div class="formLogin">
        <form action="" method="POST" accept-charset="utf-8">
            <table border="0" align="center" cellpadding="16">
                <tr>
                    <td align="left">
                        LOGIN :</br></br>
                        MOT DE PASSE :
                    </td>

                    <td width="240">
                        <input name="t_login" type="text" size="24" maxlength="32" <?php if ($error) echo "disabled";?>/></br></br>
                        <input name="t_password" type="password" size="24" maxlength="32" <?php if ($error) echo "disabled";?>/>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <button type="submit" <?php if ($error) echo "disabled";?>>
                            <img src="./_ASSETS/Dialog-Apply-48.png" />
                        </button>
                        <button type="reset" <?php if ($error) echo "disabled";?>>
                            <img src="./_ASSETS/Gnome-Window-Close-48.png" />
                        </button>
                    </td>
                </tr>

                <tr>
                    <td  align="center" colspan="2"><a href="./_PAGE/passwordRecoveryForm.php">Oublié votre mot-de-passe ?</a></td>
                </tr>
            </table>
        </form>
    </div>
</div>