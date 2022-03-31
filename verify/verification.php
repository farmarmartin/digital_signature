<?php
include '../sign/dat/signature.php';
include '../sign/dat/dbh.php';
$test = 4;
#verify--------------------
$extract = explode('###', $file_content);
$extId = $extract[1]; # ID extrahované ze souboru
$extEnkey = $extract[2]; # zašifrovaný klíč extrahový ze souboru
$stream = fopen('../sign/dat/data.txt', 'r');

$id_from_dat = mysqli_query($connect,"SELECT idcertificate FROM certif;");
//$key_from_dat = mysqli_query($connect,"SELECT md5_key FROM certif;");


?>