<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Gönderilen Bilgiler</title>
<style>
body {
    font-family: Arial;
    text-align: center;
    margin-top: 80px;
}

.box {
    width: 400px;
    margin: auto;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}
</style>
</head>

<body>

<div class="box">
<h2>Gönderilen Bilgiler</h2>

<?php
$ad = $_POST["ad"];
$email = $_POST["email"];
$mesaj = $_POST["mesaj"];

echo "<p><b>Ad Soyad:</b> $ad</p>";
echo "<p><b>Email:</b> $email</p>";
echo "<p><b>Mesaj:</b> $mesaj</p>";
?>

</div>

</body>
</html>