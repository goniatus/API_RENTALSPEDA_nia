 <?php
	$kodesepeda = $_POST['kodesepeda'];
	$merk = $_POST['merx'];	
	$warna = $_POST['warna'];
	$hargasewa = $_POST['hargasewa'];
	
	// $gambar = $_FILES['gambar']['name'];
	$jenis = $_POST['jenis'];
	//   $image_url = $_FILES['gambar']['tmp_name'];
	
	//move_uploaded_file($image_url, 'upload/' .$gambar);
	$con = mysqli_connect("localhost","root","","apispd");
	$sql = "INSERT INTO tbsepeda (kodesepeda , merx , warna , jenis, hargasewa ) VALUES ('$kodesepeda', '$merx', '$warna', '$jenis' , '$hargasewa' )  ";
	$json["hasil"]=array();
	//$result = mysqli_query($con,$sql);
	//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$count = mysqli_num_rows($result);
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
	//echo $sql;
?>
