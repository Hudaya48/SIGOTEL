<?php
    include "koneksi.php";
	$targetDir = "images/";
	$fileName = basename($_FILES["gambar"]["name"]); 
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
	
	
   if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
	$query = mysqli_query($koneksi, "INSERT INTO hotel(`nama_hotel`, `harga`, `alamat`, `lang`, `lat`, `fasilitas`) VALUES ('$_POST[nama_hotel]', '$_POST[harga]','$_POST[alamat]', '$_POST[lang]', '$_POST[lat]', '$_POST[fasilitas]')");
	if($query){
		echo "<script>alert(\"Tambah Data Berhasil\"); location.href='manage.php'</script>";
	}else{
		echo "<script>alert(\"".mysqli_error($koneksi)."\"); location.href='manage.php'</script>";}
	}
	
	if(isset($_POST["submit"]) && empty($_FILES["file"]["name"])){
	$file_type = array('jpg','JPG','jpeg','JPEG','png','PNG','gif','GIF','pdf','PDF','docx','sql','');
	if(in_array($fileType, $file_type)){
	if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath));
	$query = mysqli_query($koneksi, "INSERT INTO hotel(`nama_hotel`, `harga`, `alamat`, `lang`, `lat`,`fasilitas`, `gambar`) VALUES ('$_POST[nama_hotel]', '$_POST[harga]','$_POST[alamat]', '$_POST[lang]', '$_POST[lat]', '$_POST[fasilitas]', '$fileName')");
	if($query){
		echo "<script>alert(\"Tambah Data Berhasil\"); location.href='manage.php'</script>";
	
	}else{
		echo "<script>alert(\"".mysqli_error($koneksi)."\"); location.href='manage.php'</script>";}
	}else{
			echo "<script>alert(\"format file di didukung\");location.href='manage.php'</script>";}	
	}
?>