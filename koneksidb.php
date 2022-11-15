<?php
	$servername = "localhost";
	$database = "folk_scenery";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername,$username,$password,$database);

	if($conn)
	{
		$conn=mysqli_select_db($conn,$database);
		echo "koneksi berhasil";
	}
	else
	{
		echo "koneksi gagal";
	}

?>