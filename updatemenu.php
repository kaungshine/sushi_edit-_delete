<?php 

	$name = $_POST['edit_name'];
	$price = $_POST['edit_price'];
	$id = $_POST['edit_id'];
	$oldphoto = $_POST['edit_oldphoto'];

	$newphoto = $_FILES['edit_newphoto'];
	$newphotoname = $newphoto['name'];

	echo "Id => ".$id."<br>".
	"Name => ".$name."<br>".
	"Price => ".$price."<br>".
	"Old Photo Link => ".$oldphoto."<br>".
	"New Photo => ".$newphotoname."<br>";


	if($newphoto['size'] > 0){
		$basepath = "img/";

		$fullpath = $basepath.$newphotoname;
	move_uploaded_file($newphoto['tmp_name'], $fullpath);
	}else{
		$fullpath = $oldphoto;
	}
	$menu_array = array(
		"sushi_name" => $name,
		"sushi_price" => $price,
		"sushi_photo" => $fullpath,
	);

	$jsonData = file_get_contents('menulist.json');

	if(!$jsonData) {
		$jsonData = '[]';
	}

	//convert into array from json
	$data_arr = (array)json_decode($jsonData);

	$data_arr[$id] = $menu_array;

	$jsonData = json_encode($data_arr,
		JSON_PRETTY_PRINT);

	file_put_contents('menulist.json', $jsonData);

	header("location:index.php");

 ?>