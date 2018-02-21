<?php
/**
 * Created by PhpStorm.
 * User: hadmin
 * Date: 04/06/2016
 * Time: 20:12
 */
$user="dbAdmin";
$pass="ZYEc58B5FcFYxYsr";
$dbname="db_gcd";

$dsn="mysql:host=localhost;dbname=$dbname";
$error=false;

try{
    $conGCD=new PDO($dsn,$user,$pass);
    $conGCD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "[CONNECTED] : ".$dbname;
}
catch(PDOException $e){
    echo "
        <div class=errormsg>[ERROR DATABASE CONNECTION] </br>
        ".$e->getMessage().
        "</div>";
    $error=true;
}