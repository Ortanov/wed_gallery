<?php

 $fil_name = $_FILES['img']['name']; 
 $file_type = $_FILES['img']['type'];
 move_uploaded_file($_FILES['img']['tmp_name'],"img/".$fil_name );

$conect = mysqli_connect('localhost','root','root','gallery')
or die('Ошибка');


 if(!empty( $fil_name )){
   echo( "данные отправлены "."  Тип даннх:".$file_type);




 	if($file_type == "image/jpeg" || "image/jpg" || "image/gif" || "image/web") {
$box = "INSERT INTO blok_gallery (img,video)
VALUES ('$fil_name',' ')";
 }

 if($file_type == "video/mp4") {
$box = "INSERT INTO blok_gallery (img,video)
VALUES (' ','$fil_name')"; 
 }

$queri = mysqli_query($conect,$box);
 mysqli_close($conect);
 
} else{echo "нет данных";}

 

 print_r($_POST);
 

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>	
	<title>Document</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/style_admin.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
<header>
	<div class="heder">
	<img src="ocr.png" alt="ss" width="80" height="80">
		<h1> AniFan</h1>
		<a href="#">Выйти</a>
	</div>
</header>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ;?>" enctype="multipart/form-data" >
<input type="file" multiple accept="image/*,video/*" name="img">
<button type="submit" name="submit"> Отправить</button><br/>
</form>



<section>
	<div>
<?php 
$test2= substr($fil_name, -strlen('.mp4'))=='.mp4';
$test= substr($fil_name, -strlen('.jpg'))=='.jpg';

if($fil_name == $test ){
 echo "<img class='imoge' src='img/$fil_name' alt='img'>";
}  

else if($fil_name == $test2) {
 echo "<video src='img/$fil_name' controls='controls'></video>";
}

?>
</div>

</section>








</body>
</html>