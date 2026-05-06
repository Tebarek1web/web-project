<?php

$username = $_POST["username"];
$password = $_POST["password"];

$dogruEmail = "tebarek.sirgat@ogr.sakarya.edu.tr";

?>

<!DOCTYPE html>
<html lang="tr">

<head>
<meta charset="UTF-8">
<title>Login Kontrol</title>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#f5f3ff;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.box{
    width:420px;
    background:white;
    padding:40px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

h1{
    color:#7c3aed;
}

.error{
    color:red;
}

a{
    text-decoration:none;
    color:#7c3aed;
    font-weight:bold;
    font-size:18px;
}

</style>
</head>

<body>

<div class="box">

<?php

if(
    $username == $dogruEmail &&
    preg_match("/^b[0-9]+$/", $password)
){

    echo "<h1>Giriş Başarılı</h1>";
    echo "<p>Hoşgeldiniz Tebarek Şirgat</p>";
    echo "<br>";
    echo "<a href='index.html'>Ana Sayfaya Git</a>";

}
else{

    echo "<h1 class='error'>Hatalı Giriş</h1>";
    echo "<p>Email yanlış veya şifre hatalı.</p>";
    echo "<br>";
    echo "<a href='login.html'>Tekrar Dene</a>";

}

?>

</div>

</body>
</html>