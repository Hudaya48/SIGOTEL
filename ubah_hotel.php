
<?php	
	include "koneksi.php";
	$targetDir = "images/";
	$fileName = basename($_FILES["gambar"]["name"]); 
	$targetFilePath = $targetDir . $fileName;
	
	if(isset($_POST["submit"]) && empty($_FILES["gambar"]["name"])){
	$query = mysqli_query ($koneksi," UPDATE hotel SET nama_hotel='$_POST[nama_hotel]', harga='$_POST[harga]', alamat='$_POST[alamat]', fasilitas='$_POST[fasilitas]' WHERE id='$_GET[id]' ");
	if($query){
		echo "<script>alert(\"Data Hotel Berhasil Di Ubah\"); location.href='manage.php'</script>";
	}else{
		echo "<script>alert(\"".mysqli_error($koneksi)."\"); location.href='form_ubah.php?id=$_GET[id]'</script>";}
	}
	
	if(isset($_POST["submit"]) && !empty($_FILES["gambar"]["name"])){
	move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFilePath);
	$query = mysqli_query ($koneksi," UPDATE hotel SET nama_hotel='$_POST[nama_hotel]', harga='$_POST[harga]', alamat='$_POST[alamat]', fasilitas='$_POST[fasilitas]', gambar='$fileName' WHERE id='$_GET[id]' ");
	if($query){
		echo "<script>alert(\"Data Hotel Berhasil Di Ubah\"); location.href='manage.php'</script>";
	}else{
		echo "<script>alert(\"".mysqli_error($koneksi)."\"); location.href='form_ubah.php?id=$_GET[id]'</script>";}
	}
?>