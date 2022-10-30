<?php
session_start();
$message = "";
echo "<h1> SignUP Screen </h1>";
 if(isset($_POST["kullanici_adi"]) && isset($_POST["sifre"])) {
    $kullanici_adi = "kadir";
    $sifre = "123";

        if($_POST["kullanici_adi"] == $kullanici_adi && $_POST["sifre"] == $sifre ) {
            $message = "Giris Basarili";
            include_once("2.php");
        }
        else {
            $message = "Hatali Kullanici Bilgileri";
        }
    }
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Form Uygulamalari </title>
</head>
<body>
    <p><?php echo $message; ?> </p>
    <form  method="post">
        <input type ="text" name ="kullanici_adi" placeholder="kadir" />
        <input type ="password" name ="sifre" placeholder="123" />
        <input type ="submit" value ="giris"  />
    </form>
</body>
</html>

