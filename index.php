<?php require 'config.php'; ?>
<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8">
<title>Malzeme Takip Sistemi</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">
<h2>📦 Malzeme Takip Sistemi</h2>

<input type="text" id="kisi_adi" class="form-control my-3" placeholder="Ad Soyad">
<button class="btn btn-success" onclick="kisiEkle()">Kişi Ekle</button>

<hr>

<?php
$kisiler=$pdo->query("SELECT * FROM kisiler ORDER BY id DESC")->fetchAll();
foreach($kisiler as $k){
 echo "<div class='card p-2 mb-2'><b>".$k['ad_soyad']."</b></div>";
}
?>

</div>

<script>
function kisiEkle(){
 let ad=document.getElementById('kisi_adi').value;
 fetch('ajax.php',{
  method:'POST',
  headers:{'Content-Type':'application/x-www-form-urlencoded'},
  body:'islem=kisiEkle&ad='+encodeURIComponent(ad)
 }).then(()=>location.reload());
}
</script>
</body>
</html>
