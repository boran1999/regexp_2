<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <h1 align ="center">Reg-exp</h1>
  <title>RegExp</title>
 </head>
 <body>
 <?php include 'functions.php' ?>
<p>Из полного имени файла (например, picture.jpg) получите его расширение (например, jpg)</p>
  <form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST">
   <p><input placeholder="Введите имя файла" name="id1" value="<?= isset($_POST['id1']) ? $_POST['id1']:''?>"></p>
   <p><input type="submit"></p>
  </form>
  <div>
  	<?php
  	if(!empty($_POST['id1'])){
  		$var1=$_POST['id1'];
  		echo findtail($var1);
  	}
  	else{
  		echo "Введите данные";
  	}
	?>
</div>
<p>По полному имени файла проверьте соответствует ли оно: а) архиву, б) аудиофайлу, в) видеофайлу, г) картинке</p>
  <form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST">
   <p><input placeholder="Введите имя файла" name="id2" value="<?= isset($_POST['id2']) ? $_POST['id2']:''?>"></p>
   <p><input type="submit"></p>
  </form>
  <div>
  	<?php
  	if(!empty($_POST['id2'])){
  		$var2=$_POST['id2'];
  		echo checktail($var2);
  	}
  	else{
  		echo "Введите данные";
  	}
	?>
</div>
<p>В правильном html-коде найдите строку, заключенную в теги "title"</p>
  <form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST">
   <p><input placeholder="Введите html-код" name="id3" value="<?= isset($_POST['id3']) ? $_POST['id3']:''?>"></p>
   <p><input type="submit"></p>
  </form>
  <div>
  	<?php
  	if(!empty($_POST['id3'])){
  		$var3=$_POST['id3'];
  		echo find_in_title_teg($var3);
  	}
  	else{
  		echo "Введите данные";
  	}
	?>
</div>
<p>В произвольном html-коде найдите ссылки, заключенные в тегах "a"</p>
  <form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST">
   <p><input placeholder="Введите html-код" name="id4" value="<?= isset($_POST['id4']) ? $_POST['id4']:''?>"></p>
   <p><input type="submit"></p>
  </form>
  <div>
  	<?php
  	if(!empty($_POST['id4'])){
  		$var4=$_POST['id4'];
  		echo find_in_a_teg($var4);
  	}
  	else{
  		echo "Введите данные";
  	}
	?>
</div>
</body>
</html>
