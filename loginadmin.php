<?php
	session_start();
	require_once("connect.php");   
	$user = $_POST['userid'];
	$pass = $_POST['password'];  
	$cekuser = mysql_query("SELECT * FROM admin WHERE userid = '$user'");
	$jumlah = mysql_num_rows($cekuser);
	$hasil = mysql_fetch_array($cekuser);  
	if($jumlah == 0) {
		echo "Invalid admin ID!<br/>";
		echo "<a href=\"admin.php\">&laquo; Back</a>";
	} else {
		if($pass <> $hasil['password']) {
			echo "Wrong password!<br/>";
			echo "<a href=\"admin.php\">&laquo; Back</a>";
		} else {
			$_SESSION['userid'] = "$user";
			header('location:admin2.php');
		}	
	}
?>
