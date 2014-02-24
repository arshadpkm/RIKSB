<?php

session_name('AdmLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>

</head>

<body>

<?php
		$_SESSION=array();
		session_destroy();
		header("Location:index.html");
		exit;
?>
</body>
</html>