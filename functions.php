<?php
function findtail($str){
	if(preg_match("/^[a-z0-9а-я_]+\.[a-z]+$/", $str)){
		preg_match("/\.[a-z]+/", $str, $mas);
		$res=substr($mas[0], 1);
		return $res;
	}
	return "Не верный формат ввода";
}
function checktail($str){
	if(preg_match("/^[a-z0-9а-я_]+\.[a-z0-9]+$/", $str)){
		if(preg_match("/(\.zip|\.rar|\.tz|\.gzip|\.7z)/", $str)){
			return "Это архив";
		}
		else if(preg_match("/(\.mp3|\.midi|\.m4p|\.temp)/", $str)){
			return "Это аудиофайл";
		}
		else if(preg_match("/(\.mp4|\.mov|\.avi|\.flv|\.vob)/", $str)){
			return "Это видеофайл";
		}
		else if(preg_match("/(\.jpg|\.png|\.bmp|\.pict|\.cur)/", $str)){
			return "Это картинка";
		}
		else
			return "Такого не понимаю";
	}
	return "Такого не понимаю";
}
function find_in_title_teg($str){
	if(preg_match("/\<title\>(.)+\<\/title\>/",$str,$mas)){
		$mas[0]=substr($mas[0], 7);
		$mas[0]=substr($mas[0],0,-8);
		return $mas[0];
	}
	return "В данном html-коде нет тега title";
}
function find_in_a_teg($str){
	
}
