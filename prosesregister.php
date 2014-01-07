<?php
	require_once("connect.php");  
	$user = $_POST['userid'];
	$pass = $_POST['password']; 
	$pass2 = $_POST['password2'];
	$ques1 = $_POST['ques1'];
	$ques2 = $_POST['ques2'];
	$cekuser = mysql_query("SELECT * FROM member WHERE userid = '$user'");  
	if(mysql_num_rows($cekuser) <> 0) 
	{
		echo "User ID already exist!<br/>";
		echo "<a href=\"register.php\">&laquo; Back</a>";
	} 
	else if($pass!=$pass2)
	{
		echo "Unmatched password!<br/>";
		echo "<a href=\"register.php\">&laquo; Back</a>";
	}
	else 
	{
		if(!$user || !$pass || !$ques1 || !$ques2) 
		{
			echo "There are empty datas!<br/>";
			echo "<a href=\"register.php\">&laquo; Back</a>";
		} 
		else 
		{	
			$simpan = mysql_query("INSERT INTO member VALUES('$user','$pass','$ques1','$ques2')");
			if($simpan) 
			{
				echo "Register successful, please <a href=\"forum.php\">Login</a>";
			} 
			else 
			{
				echo "Failed!";
			}
		}
	}  
?>