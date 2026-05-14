<?php

$username = $_POST["username"];
$password = $_POST["password"];

$dogruEmail = "tebarek.sirgat@ogr.sakarya.edu.tr";

?>

<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Login Sonucu</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="login-sonuc">

<?php

if($username == $dogruEmail && preg_match("/^b[0-9]{9}$/", $password)){

    echo "<h1>Hoşgeldiniz</h1>";
    echo "<p>Öğrenci No: " . $password . "</p>";
    echo "<a href='login.html'>Geri Dön</a> ";
    echo "<a href='index.html'>Ana Sayfaya Git</a>";

}else{

    echo "<h1 class='error'>Hatalı Giriş</h1>";
    echo "<p>Email yanlış veya şifre hatalı.</p>";
    echo "<a href='login.html'>Tekrar Dene</a>";

}

?>

</div>

</body>
</html>