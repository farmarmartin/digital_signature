<?php

error_reporting(E_ERROR | E_PARSE);
include '../sign/dat/dbh.php';
include '../sign/dat/signature.php';

#verify--------------------
$key = null;

$extract = explode('###', file_get_contents('../data.txt')); # Otveření souboru a rozdělění dat
$extData = $extract[0];
$extId = $extract[1]; # ID extrahované ze souboru
$extEnhash = $extract[2]; # zašifrovaný hash textu extrahovaný ze souboru


$sql = "SELECT idcertificate, md5_key, hash_value, expires FROM certif WHERE idcertificate =('$extId')"; # SQL příkaz pro získání všech potřebných dat
$result = mysqli_query($connect, $sql); # Připojení k DB

$hashedData = hash('sha256', $extData);

while($row = mysqli_fetch_assoc($result)){
    $key = $row["md5_key"];
    $hash = $row["hash_value"];
    $expire = $row["expires"];
};
if($key != null){
    if(openssl_decrypt($extEnhash, 'blowfish', $key, $options = 0) == $hash and $hash == $hashedData){
        echo "<p>Soubor nebyl změněn.</p>";
        echo "<p>Certifikát je validní do $expire</p>";
    }else{
       echo "<p>Soubor byl pozměněn.</p>";
    }
    }else{
    echo "<p>Soubor nelze verifikovat.</p>";
}
unlink("../../data.txt")
?>