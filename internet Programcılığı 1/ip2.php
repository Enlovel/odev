<?php
echo "deneme";
echo "<br />";
echo(min(0, 15, -30, 20, -5));//en kucuk sayi
echo "<br />";
echo(max(0, 15, -30, 20, -5));//en buyuk sayi
echo "<br />";
echo round(7.21);//yuvarlama
echo "<br />";
echo abs(-6.7);//mutlak deger
echo "<br />";
echo rand(0,100);//rasgele sayi turetme
echo "<br />";
$a=5;
$b=3;
$c = $a + $b;
// $a += 77; 
echo $c;
echo "<br />";
echo $a;
echo "<br />";
 if  ( $a !== $b ){ echo "ayni degerlere sahipler";}
else {echo "farkli degere sahip";}  
echo "<br />"; 
echo ($a <=> $b);//soldaki buyukse 1,sagdaki buyukse -1,esitse 0
echo "<br />";

$sonuc= ($a <=> $b); 
if($sonuc == 0)         { echo "Degerler esit";}
else if ($sonuc == 1)   {echo "a > b";}
else if ($sonuc == -1)  { echo "b > a";}
echo "<br />";
switch($sonuc){case 0: echo "Degerler esit"; break;
    case 1; echo "A > B";  break;
    case -1; echo "A < B"; break;
}echo "<br />";

$ay = array("ocak","subat","mart");
$ay = ["ocak","subat","mart"];
print_r($ay);//detayli gosterme
var_dump($ay); //detayli gosterme v2
echo count($ay);//kac elemanli gosterir
echo "<br />";
echo $ay[1];
echo "<br />";
$ogr = [
    "202151502008" => "Kadir G",
    "202151502033" => "ahmet r",
    "202151502056" => "ali e",
];
echo $ogr[202151502008]; 
echo "<br />";
$sehir = [
    "kutahya",
    "artvin",
    "bursa",
    "antalya",
    "adana",
    "ankara",
];
echo $sehir [count($sehir)-1];//son elemani bulur
echo "<br />";
for ($i=0 ; $i < count($sehir) ; $i++ ){
    echo $sehir[$i]; //tum sehirleri alt alta yazar s
    echo "<br />";
}
 echo "<hr />";
/*
while(){
    echo $sehir[count($sehir)-1];
}

*/
?>