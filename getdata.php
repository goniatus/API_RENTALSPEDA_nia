<?php
	$kodesepeda = $_POST['kodesepeda'];
    $merx = $_POST['merx'];
    $warna = $_POST['warna'];
    $hargasewa = $_POST['hargasewa'];

   // $gambar = $_FILES['gambar']['name'];
	$jenis = $_POST['jenis'];
 //   $image_url = $_FILES['gambar']['tmp_name'];
	
 //   move_uploaded_file($image_url, 'upload/' .$gambar);

	$con = mysqli_connect("localhost","root","","dbrentalsepeda");
	$sql = "INSERT INTO tbsepeda (kodesepeda , merx , warna , jenis,	hargasewa ) VALUES ('$kodesepeda', '$merx', '$warna', '$jenis' , '$hargasewa' )  ";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]="sukses";
	}else{
		$json["hasil"]["respon"]="gagal";
	}
	echo json_encode($json);
?>