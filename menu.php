<?php 
	$name = $_POST['sushi_name'];
	$price = $_POST['sushi_price'];
	$photo = $_FILES['sushi_photo'];
	$photoname = $photo['name'];


	//upload file
	$basepath = "img/";

	$fullpath = $basepath.$photoname;
	move_uploaded_file($photo['tmp_name'], $fullpath);

	$menu = array(
		"sushi_name" => $name,
		"sushi_price" => $price,
		"sushi_photo" => $fullpath
	);
	//var_dump($menu).die();
	// get jsonData from jsonfile
	$jsonData = file_get_contents('menulist.json');

	if(!$jsonData) {
		$jsonData = '[]';
	}

	//convert into array from json
	$data_arr = (array)json_decode($jsonData);
	array_push($data_arr, $menu);

	$jsonData = json_encode($data_arr,
		JSON_PRETTY_PRINT);

	file_put_contents('menulist.json', $jsonData);

	header("location:index.php");

	//var_dump($student);
 ?>