<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Video Player</title>

<style type="text/css">
#apDiv1 {
	position:absolute;
	left:10px;
	top:142px;
	width:1300px;
	height:444px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:7px;
	top:10px;
	width:396px;
	height:91px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:800px;
	top:-36px;
	width:478px;
	height:141px;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	left:804px;
	top:68px;
	width:97px;
	height:20px;
	z-index:3;
}
#apDiv5 {
	position:absolute;
	left:935px;
	top:69px;
	width:90px;
	height:19px;
	z-index:4;
}
#apDiv6 {
	position:absolute;
	left:1043px;
	top:69px;
	width:103px;
	height:21px;
	z-index:5;
}
#apDiv7 {
	position:absolute;
	left:1167px;
	top:68px;
	width:100px;
	height:18px;
	z-index:6;
}
#apDiv8 {
	position:absolute;
	left:8px;
	top:13px;
	width:1300px;
	height:120px;
	z-index:7;
}
</style>
</head>
  <?php
$v=$_GET['v'];

?>
<body style="background-image:url(../img/bkvd.jpg)">

<div id="apDiv1">
<div align="center">
<video width="860" height="440" controls>
  
    <source src=<?php echo "../".$v; ?> type="video/mp4">
    
    Your browser does not support the video tag.
  
</video>
</div>
</div>



<div id="apDiv8">
<div id="apDiv2"><img src="../img/vp.png" width="380" height="98">
<div id="apDiv3">
  <p align="left"><img src="../img/2.png" alt="" width="115" height="85" border="0" usemap="#Map" longdesc="../index.html">
    <map name="Map">
      <area shape="rect" coords="-10,-20,104,80" href="../index.html">
    </map>
    <img src="../img/4.png" alt="" width="115" height="85" border="0" usemap="#Map2" longdesc="../story/storyboard.php">
    <map name="Map2">
      <area shape="rect" coords="7,9,112,81" href="../story/storyboard.php">
    </map>
    <img src="../img/1.png" alt="" width="115" height="85" border="0" usemap="#Map3" longdesc="video.php">
    <map name="Map3">
      <area shape="rect" coords="3,3,111,83" href="video.php">
    </map>
    <img src="../img/3.png" alt="" width="115" height="85" border="0" usemap="#Map4" longdesc="../aboutus.html">
    <map name="Map4">
      <area shape="rect" coords="4,4,113,81" href="../aboutus.html">
    </map>
  </p>
</div>
<div id="apDiv4">
  <div align="center"><strong><a href="../index.html">HOME</a></strong></div>
</div>
<div id="apDiv5">
  <div align="center"><strong><a href="../story/storyboard.php">STORY</a></strong></div>
</div>
<div id="apDiv6">
  <div align="center"><strong><a href="video.php">VIDEO</a></strong></div>
</div>
<div id="apDiv7">
  <div align="center"><a href="../aboutus.html"><strong>ABOUT US</strong></a></div>
</div>
</div>
</div>
</body>
</html>
