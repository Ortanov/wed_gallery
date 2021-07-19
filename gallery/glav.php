<?php

$content= mysqli_connect('localhost','root','root','gallery')
or die('Ошибка');

$adres= " SELECT * FROM blok_gallery";
//$adres_2= " SELECT video FROM blok_gallery";

$box= mysqli_query($content,$adres);
//$box_2= mysqli_query($content,$adres_2);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>	
	<title>Document</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
	
<header>
	<div class="heder">
	<img src="ocr.png" alt="ss" width="80" height="80">
		<h1> AniFan</h1>
		<a href="#">Войти</a>
	</div>
</header>

<section>
 <div class="line">
 	<a href="">Фото</a>
 	<a href="video.php">Видео</a>
 </div>
	
 <div class="section">
<img src="img/rwby-ruby-rose-anime-character-girl-cookie-jacket-colorful-b.jpg" alt="img">
<img src="img/s1200 (1).webp" alt="img">
<img src="img/s1200.webp" alt="img">

<img src="img/rwby-ruby-rose-anime-character-girl-cookie-jacket-colorful-b.jpg" alt="img">
<img src="img/s1200 (1).webp" alt="img">
<img src="img/s1200.webp" alt="img">

<?php 
 

while ($rov= mysqli_fetch_array($box)) {	
 if($rov[img]!== ' '){
	echo "<div class='section_box'><img src='img/$rov[img]' alt='img'></div>";
 }
  if($rov[video]!== ' '){
	echo "<video src='img/$rov[video]' controls='controls'></video>";
  }

 $url_name = end(explode(".",$rov[url]));

  if ($url_name == 'jpg' ){
echo "<div class='section_box'><img src='$rov[url]' alt='img'></div>";

  }
 }


mysqli_close($content);
?>


 </div>
</section>

<footer>
	<div class="footer">
		
		
	</div>
</footer>


</body>
</html>