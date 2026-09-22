<?php
require 'config.php';

$islem=$_POST['islem'] ?? '';

if($islem=='kisiEkle'){
 $ad=trim($_POST['ad']);
 $stmt=$pdo->prepare("INSERT INTO kisiler(ad_soyad) VALUES(?)");
 $stmt->execute([$ad]);
 echo 'ok';
}
?>
