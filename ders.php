
<!--- 
 $v = "yazılım "; # yazılım değişkeni tanımlandı

echo $v."&nbsp; &nbsp;  dersleri"; # &nbsp; boşluk bırakmayı sağlar yazılım + dersleri olarak ekrana çıkar 

$v = 5; # sayılarda tırnak vs yok

echo $v+$v; # 5+5 yapar php de son girilen değer her zaman kabul edilir

$a = 5;
$b =10;
 $a += $b; # a= a+b; yapmak yerine direk böyle yaptık atama operatörü
 echo $a;


$a = "user";
$$a = "cem";

echo "$user"; #değişkenin değişkeni demek veri tabanından veri çekerken useri çekecek isim boş kalırsa o isim çıkacak ekrana.

 #DEFİNE SABİT DEĞİKEN DEMEK define("mert","naber") $b = mert; denince ekrana naber gelecek  

define ("selam","sa kardeşim ben dj dikkat"); #sitede selam denince direk ekrana sa kardeşim gelcek.

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".selam; 

---->


<?php

/*if($_POST) {

$isim = $_POST["isim"]; 
$soyad = $_POST["soyad"];

if($isim == "") { 

echo "boş isim";

}

elseif($soyad == "") { 

echo "<script>alert('boş şifre!')</script>";

} 

} 

echo'<form action="ayar.php" method="post">
Ad<input type="text" name="isim" /><br />
<br />
SoyAd<input type="password" name="soyad" /><br />
<br />
gonder<input type="submit" name="gonder" />
</form>' 

/* $sayi = "A";
$sayac = 1;
while($sayi != "A")  { 

$sayi = rand("a","b");
$sayac++ ;
}

*/

/*$a = "<div style=\"color:red;\">osman</div>"; # iki tırnak içinde tekrar iki tırnak kullanılamaz ters slaş koyunca yapılıyo ama

echo $a;
*/

/*$a = 10;
$b = ($a=10) ? "eşittir" : "değildir"; # if elsenin değişik hali koşul ? olur olmaz : olur veya olmaz

echo $b;
*/

/*$a = "0";


while($a < 20)  { 
	
	$a++;
	echo "deneme";
	
}

$mesaj="tekrarlanan kısım";
for ($i=1;$i<=7;$i++) {
echo "<font size='$i'>$mesaj</font><br>";
}
*/

echo "<a href='deneme.php?sayfa=iletisim'>iletişim</a>";

$a = @$_GET["sayfa"]; #sistemi yormaz else if yerine kullanması daha tercih edilir default da eğer böyle bir şey yok boş diye kullanılır

switch($a){ 

case"iletisim";
echo "iletisim bölümüne hoşgeldiniz";

case"iletis";
echo "iletisim bölümüne hoşgeldiniz";


case"ileti";
echo "iletisim bölümüne hoşgeldiniz";

default;
echo "ANA SAYFAYA HOŞGELDİNİZ";


}

/*$a = array ("dersler","deneme","ahmet"); #dizi tanımladık ve onu çağırdık

#foreach($a as $b) $b = count($b);  {echo $b; } #son eklenenleri de göstermeyi sağlıyor
foreach($a as $b) { 


echo $a[2];
} */

/*  $a = array ("dersler","deneme","anan"	,"naber"); 
   $b = count($a); 
   for($d= 0; $d< $b; $d++) { 
   
   echo $a[$d];
   
   }  
   
   */ #AYNISININ FOR DÖNGÜLÜ HALİ

$a = array ("mahmut","osman","murat","anan"); 
sort($a); #dizide ki elemanları küçükten büyüğe sıralar başına r gelirse rsort tam tersi / a gelirse başına küçük büyüğe sıralar ama a 0 olarak kalır index indix değişmez 0=A sort r sort bozuyo / ar gelir basına oda anahtarı indisi bozmaz

foreach($a as $b) {
	
	echo $b;
	
	}
	
$q = array ("A","B","C","D"); 	 #random şeyleri çekiyor her refresh de başka foto başka isim vs
shuffle($q);

foreach($q as $e) {

echo $e."<br>";
}

$g = array ("A" => "bursa" ); #extract verileri değişkene falan çeviriyor dizileri yani

extract($g);

echo $bursa;

?>

