<?php
	include("session.php"); 
	if(!isset($_SESSION['userid'])) {
	header('location:forum.php'); }
	else { $usr = $_SESSION['userid']; }
	require_once("connect.php");
  
	$query = mysql_query("SELECT * FROM member WHERE userid = '$usr'");
	$hasil = mysql_fetch_array($query);
	
	if(isset($_POST['forum']))
	{
		$con = mysql_connect("localhost","root","");
						
		if(!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		
		mysql_select_db("db", $con);
		
		mysql_query("insert into forum values('$usr','$_POST[textarea2]')");
	}
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
        <td width="20%"><a class="button-2" href="#"><font size="+1" color="#000000"><b> Promotion And Discount </b></font></a></td>
        <td width="20%"><a class="button-2" href="billing.php"><font size="+1" color="#000000"><b> Billing </b></font></a></td>
        <td width="20%"><a class="button-3" href="forum.php"><font size="+1" color="#000000"><b> Forum </b></font></a></td>
      </tr>
    </table></td>
  </tr>
</table>	</td>
  </tr>
  
  <tr bgcolor="#F3F2FF">
    <td>
	  <form id="form1" name="form1" method="post" action="">
      <label>
	  <br />
      <table border="1" width="100%" cellpadding="0" cellspacing="0">
	  		<?php
				$con = mysql_connect("localhost","root","");
			
				if(!$con)
				{
					die('Could not connect: ' . mysql_error());
				}
				
				mysql_select_db("db", $con);
			
				$result = mysql_query("SELECT * FROM forum");
				
				while($row = mysql_fetch_array($result))
				{
					echo "
							<tr>
								<td width='15%'>" . $row['userid'] . "</td>
								<td width='5%' align='center'>  :  </td>
								<td width='80%'> " . $row['mes'] . "</td>
							</tr>
						";
				}
			?>
	  </table>
      </label> <br /><br /><br /><br /><br />
	    <label>
	    <textarea id="txt2" name="textarea2" cols="70" rows="4">
		</textarea>
	    </label>
		<br />
		<label>
		<input type="submit" value="Post" name="forum"/> 
		</label>
		<label>
			<a href="logout.php"><b>Logout</b></a>
		</label>
	  </form>    </td>
  </tr>
</table>
</body>
</html>
