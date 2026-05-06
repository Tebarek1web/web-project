<?php
$ad = $_POST["ad"];
$email = $_POST["email"];
$mesaj = $_POST["mesaj"];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Gönderilen Bilgiler</title>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f5f3ff;
    text-align: center;
    padding-top: 90px;
}

.box {
    width: 430px;
    margin: auto;
    background-color: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

h2 {
    color: #7c3aed;
}

p {
    font-size: 18px;
    color: #222;
}

a {
    color: #7c3aed;
    text-decoration: none;
    font-weight: bold;
}
</style>
</head>

<body>

<div class="box">
    <h2>Gönderilen Bilgiler</h2>

    <p><b>Ad Soyad:</b> <?php echo $ad; ?></p>
    <p><b>Email:</b> <?php echo $email; ?></p>
    <p><b>Mesaj:</b> <?php echo $mesaj; ?></p>

    <br>
    <a href="iletisim.html">Geri Dön</a>
</div>

</body>
</html>