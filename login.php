<?php
    $username = $_POST['username'];
	$password = $_POST['password'];
	$con = mysqli_connect("localhost","root","","dbrentalsepeda");
	$data = mysqli_query($con,"SELECT * from tbuser where username = '$username' and password = '$password'");
	$row = mysqli_fetch_array($data,MYSQLI_ASSOC);
	$cek = mysqli_num_rows($data);
	if($cek > 0){
		$json["PAYLOAD"]["respon"]=true;
		$json["PAYLOAD"]["roleuser"]=$row["rolouser"];
		$json["PAYLOAD"]["username"]=$row["username"];
		$json["PAYLOAD"]["password"]=$row["password"];
	}else{
		$json["PAYLOAD"]["respon"]=false;
	}
	echo json_encode($json);