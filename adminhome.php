<?php

session_name('AdmLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="/menu_assets/styles.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin panel</title>
<style type="text/css">
#apDiv1 {
	position:absolute;
	background-color:#39F;
	left:44px;
	top:325px;
	width:136px;
	height:38px;
	z-index:10;
}
#apDiv2 {
	position:absolute;
	left:34px;
	top:35px;
	width:1305px;
	height:83px;
	z-index:2;
	background-color:#39F;
}
#apDiv2 h1 strong {
	font-family: Comic Sans MS, cursive;
}
#apDiv2 h1 strong {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv2 h1 strong {
	color: #FFF;
}
#apDiv1 a {
	color: #800080;
}
#apDiv1 a {
	color: #0FF;
}
#apDiv3 {
	position:absolute;
	background-color:#39F;
	left:44px;
	top:377px;
	width:136px;
	height:38px;
	z-index:10;
}
#apDiv2 {
	color: #0080C0;
}
#apDiv4 {
	position:absolute;
	left:32px;
	top:150px;
	width:163px;
	height:351px;
	z-index:4;
}
#apDiv5 {
	position:absolute;
	background-color:#39F;
	left:43px;
	top:273px;
	width:136px;
	height:38px;
	z-index:11;
}
#apDiv5 {
	color: #0080FF;
}
#apDiv6 {
	position:absolute;
	left:222px;
	top:399px;
	width:0px;
	height:1px;
	z-index:5;
}
#apDiv7 {
	position:absolute;
	left:84px;
	top:16px;
	width:668px;
	height:355px;
	z-index:6;
}
#apDiv8 {
	position:absolute;
	left:1061px;
	top:19px;
	width:260px;
	height:109px;
	z-index:7;
}
</style>

</head>

<body style="background-image:url(img/admin.jpg)">

<?php
if(isset($_SESSION['user']))
{
?>
<div id="apDiv2">
  <h1 align="center"><strong>Welcome <?php
echo $_SESSION['user'];
?>
</strong></h1>
</div>
<div id="apDiv4">
  <table width="157" height="192" border="0" cellpadding="1" cellspacing="1" bgcolor="#3399FF" >
    <tr>
      <th scope="row"><a href="adminhome.php">HOME</a></th>
    </tr>
    <tr>
      <th scope="row"><a href="addv.php">ADD VIDEO</a></th>
    </tr>
    <tr>
      <th scope="row"><a href="adds.php">ADD STORY</a></th>
    </tr>
    <tr>
      <th scope="row"><a href="logout.php">LOG OUT</a></th>
    </tr>
  </table>
</div>

<div id="apDiv6"></div>
<?php
}
else
{
	?>
<div id="apDiv7">
  <h1>Oops... it seems u are not logged in....</h1>
  <a href="index.html">
  <h1>Go back...  </h1>
  </a></div>
  <div id="apDiv8">
  <h1><a href="login/login.html">Login</a></h1>
</div>
<?php	
}
?>


</body>

</html>
