<?php
include '../sign/dat/dbh.php';

$test = 4;
#verify--------------------

$extract = explode('###', file_get_contents('../sign/dat/data.txt'));
$extId = $extract[1]; # ID extrahované ze souboru
$extEnhash = $extract[2]; # zašifrovaný hash textu extrahovaný ze souboru


$sql = "SELECT idcertificate, md5_key, hash_value FROM certif WHERE idcertificate= ('$extId')";
$result = mysqli_query($connect, $sql);
//$key_from_dat = mysqli_query($connect,"SELECT md5_key FROM certif;");
$cert_info = mysqli_fetch_all($result, MYSQLI_ASSOC);
print_r($cert_info);

/*$stream = fopen('../sign/dat/data.txt', 'w');
fwrite($stream, '');
fclose($stream);*/

?>