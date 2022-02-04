<?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "DELETE FROM hotel WHERE id = '$_GET[id]'");
	if($query)
		echo "<script>alert(\"Hapus Hotel Berhasil\");location.href='manage.php'</script>";
	else
		echo "<script>alert(\"".mysqli_error($koneksi)."\");location.href='manage.php'</script>";
?>