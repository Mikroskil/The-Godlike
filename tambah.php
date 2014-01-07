<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
	if(isset($_POST['submit']))
	{	
		$connect = mysql_connect("localhost","root","");
		if(!$connect)
		{
			die('Could not connect: ' . mysql_error());
		}
			
		mysql_select_db("db", $connect);
	
		mysql_query("INSERT INTO menu VALUES('$_POST[id]', '$_POST[name]', '$_POST[desk]', '$_POST[price]', '$_POST[qty]', '$_POST[f1]')");
		
		mysql_close($connect);
	}
?>
		
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
		<td align="center">
			<form name="frm" method="post" action="">
			<table width="50%" cellspacing="0">
				<tr>
					<td width="20%"> <font color="blue" size="+1"> ID </font> </td>
					<td width="3%"> <font color="blue" size="+1"> : </font> </td>
					<td width="77%"> <input type="text" name="id"> </td>
				</tr>
				<tr bgcolor="FFFFCC">
					<td width="20%"> <font color="blue" size="+1"> Name </font> </td>
					<td width="3%"> <font color="blue" size="+1"> : </font> </td>
					<td width="77%"> <input type="text" name="name"> </td>
				</tr>
				<tr>
					<td width="20%"> <font color="blue" size="+1"> Deskripsi </font> </td>
					<td width="3%"> <font color="blue" size="+1"> : </font> </td>
					<td width="77%"> <input type="text" name="desk"> </td>
				</tr>
				<tr bgcolor="FFFFCC">
					<td width="20%"> <font color="blue" size="+1"> Price </font> </td>
					<td width="3%"> <font color="blue" size="+1"> : </font> </td>
					<td width="77%"> <input type="text" name="price"> </td>
				</tr>
				<tr>
					<td width="20%"> <font color="blue" size="+1"> Qty </font> </td>
					<td width="3%"> <font color="blue" size="+1"> : </font> </td>
					<td width="77%"> <input type="text" name="qty"> </td>
				</tr>
				<tr bgcolor="FFFFCC">
					<td width="20%"> <font color="blue" size="+1"> Browse Image </font> </td>
					<td width="3%"> <font color="blue" size="+1"> : </font> </td>
					<td width="77%"> <input type="file" name="f1"> </td>
				</tr>
				<tr>
					<td width="20%">&nbsp;  </td>
					<td width="3%">&nbsp;  </td>
					<td width="77%" align="right"> <input type="submit" name="submit" value="Save"> <input type="submit" value="Back" name="kembali" onClick="frm.action='admin2.php'; return true;"></td>
				</tr>
			</table>
			</form>
		</td>
  	</tr>
</table>
</body>
</html>
