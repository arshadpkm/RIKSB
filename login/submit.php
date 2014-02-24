<?php

session_name('AdmLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>

</head>

<body>
<p>
  <?php
   		
  		
		$uname=$_POST["uname"];
		$pwd=$_POST["pwd"];
		include('../dbcon.php');
		$res=mysql_query("select * from user where uname='$uname' and pwd='$pwd'") or die($msg="invalid user name or password");
		if($row=mysql_fetch_row($res))
		{
		$_SESSION["user"] = $_POST["uname"];
		header("Location:../adminhome.php");
			exit;
			
		}
		else
		{
			$msg="invalid user name or password";
			include('login.html');
			
		}

?>
</body>
</html>
