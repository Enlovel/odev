<html>
<head>
    <meta charset="utf-8">
    <title> login Uygulamalari</title>
</head>
<body>
<?php
echo "<h1> Login Screen </h1>";
?>
<form action="login.php" method="post">
 isim/Soyisim: <br/>
 <input type="text" name="isimS" /><br/>
 kullanici adi: <br/>
 <input type="text" name="kullanici_adi" /><br/>
 Sifre: <br/>
 <input type="password" name="sifre" /><br/>
 Cinsiyet: <br/>
 <input type="radio" name="cinsiyet" value="e" /> Erkek<br/>
 <input type="radio" name="cinsiyet" value="k" /> Kadin<br/>
 <input type="submit" value="Kayit ol" />
</form>
<p> Giris icin alttaki butona tikla</p>
<form action="sign.php" method="post">
        <input type ="submit" value ="girisYap"  />
    </form> 
</body>
</html>
