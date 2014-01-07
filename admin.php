<?php
	include("session.php"); 
	if(isset($_SESSION['userid'])) {
	header('location:admin2.php'); }
	require_once("connect.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
</head>

<body>
<table width="100%" border="1">
  <tr>
    <td>
		<table width="100%" height="100%">
  <tr>
    <td width="122" rowspan="2"><img src="images/panda cafe 2.jpg" width="120" height="113" /></td>
    <td width="857" height="48"> 
      <table width="454" align="center">
        <tr bgcolor="#FFCCFF">
          <td width="444" height="47" align="center"><b><font size="+3"><marquee>WELCOME TO PANDA CAFE</marquee></font></b></td>
        </tr>
      </table>	</td>
  </tr>
  <tr>
    <td height="52"><table width="817" height="31" align="center" cellspacing="8" cellpadding="4">
      <tr align="center">
	  	<td width="20%"><a class="button-2" href="index.php"><font size="+1" color="#000000"><b> Home </b></font></a></td>
        <td width="20%"><a class="button-2" href="menu.php"><font size="+1" color="#000000"><b> Menu </b></font></a></td>
        <td width="20%"><a class="button-3" href="admin.php"><font size="+1" color="#000000"><b> Admin </b></font></a></td>
        <td width="20%"><a class="button-2" href="billing.php"><font size="+1" color="#000000"><b> Billing </b></font></a></td>
        <td width="20%"><a class="button-2" href="forum.php"><font size="+1" color="#000000"><b> Forum </b></font></a></td>
      </tr>
    </table></td>
  </tr>
</table>	</td>
  </tr>
	
  	<tr>
		<td>
		<table width="100%">
			<tr align="center">
				<td>
	  <form method="post" action="loginadmin.php">
		<table>
			<tr>
				<td> ID </td>
				<td> : </td>
				<td> <input type="text" name="userid" /> </td>
			</tr>
			<tr>
				<td> Password </td>
				<td> : </td>
				<td> <input type="password" name="password" /> </td>
			</tr>
			<tr>
				<td>&nbsp;  </td>
				<td>&nbsp;  </td>
				<td> <input type="submit" name="submit" value="Login"/> </td>
			</tr>
		</table>
	  </form>    
	</td>
			</tr>
		</table>
		</td>
  	</tr>
</table>
</body>
</html>
