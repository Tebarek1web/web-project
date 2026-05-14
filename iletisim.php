<?php

$ad = $_POST["ad"];
$cinsiyet = $_POST["cinsiyet"];
$email = $_POST["email"];
$telefon = $_POST["telefon"];
$konu = $_POST["konu"];
$onay = isset($_POST["onay"]) ? $_POST["onay"] : "Onay verilmedi";
$mesaj = $_POST["mesaj"];

?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Gönderilen Bilgiler</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="iletişim.css">

</head>

<body>

<div class="box">

    <h2>Gönderilen Bilgiler</h2>

    <p><b>Ad Soyad:</b> <?php echo $ad; ?></p>
    <p><b>Cinsiyet:</b> <?php echo $cinsiyet; ?></p>
    <p><b>Email:</b> <?php echo $email; ?></p>
    <p><b>Telefon:</b> <?php echo $telefon; ?></p>
    <p><b>Konu:</b> <?php echo $konu; ?></p>
    <p><b>Onay:</b> <?php echo $onay; ?></p>
    <p><b>Mesaj:</b> <?php echo $mesaj; ?></p>

    <br>

    <a href="iletisim.html">Geri Dön</a>