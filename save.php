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
	left:245px;
	top:149px;
	width:803px;
	height:352px;
	z-index:5;
}
</style>
</head>

<body bgcolor="lightblue">
<?php
if(isset($_SESSION['user']))
{
?>
<div id="apDiv2">
  <h1 align="center"><strong>Welcome Admin</strong></h1>
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
<div id="apDiv6">
<?php
$f=0;
include("dbcon.php");
$title=$_POST["title"];
$author=$_POST["author"];
$str=$_POST["story"];
$str=str_replace('\'',' ',$str);
$loc=rand();
for($i=0; $i<count($_FILES['upload']['name']); $i++) 
			{
			if (($_FILES["upload"]["type"][$i] == "image/gif")
			 || ($_FILES["upload"]["type"][$i] == "image/jpeg")
			 || ($_FILES["upload"]["type"][$i] == "image/jpg")
			 || ($_FILES["upload"]["type"][$i] == "image/pjpeg")
			 || ($_FILES["upload"]["type"][$i] == "image/x-png")
			 || ($_FILES["upload"]["type"][$i] == "image/png"))
			{
					  //Loop through each file
				
				  //Get the temp file path
				  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
				
				  //Make sure we have a filepath
				  if ($tmpFilePath != ""){
					//Setup our new file path
					$newFilePath = "uploadFiles/" . $_FILES['upload']['name'][$i];
				
					//Upload the file into the temp dir
					if(move_uploaded_file($tmpFilePath, $newFilePath))
					{
					
					echo $newFilePath." uploaded<br>";
					$res=mysql_query("insert into imgloc (id,img) values('$loc','$newFilePath')") or die("Error try again");
					$f=1;
					 /*if($res)
					 echo "Story details saved successfully\n<br>";
					 else
					 echo "failedn\n<br>";*/

					}

  }
  
  }
else
  {
  echo "file uploading failed <br> Please select only image file ".$_FILES['upload']['name'][$i];
  }}
  if($f)
  {
  $res=mysql_query("insert into story (title,author,story,img) values('$title','$author','$str','$loc')") or die("Error try again");
					if($res)
					echo "table uplated\n<br> Story saved";
					 else
					 echo "table failed\n<br>story not saved try again";
  }

?>
<?php
}
else
header("Location:index.html");
?>
</div>
</body>

</html>
