<!DOCTYPE html>
<html class="no-js" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Story Board</title>

	<meta name="description" content="gridster.js, a drag-and-drop multi-column jQuery grid plugin">
	<meta name="author" content="duscksboard">

    <link rel="stylesheet" type="text/css" href="gridster.js_files/jquery.css">

	<link rel="stylesheet" href="gridster.js_files/style.css">
    <link href="gridster.js_files/css.css" rel="stylesheet" type="text/css">
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:28px;
	top:5px;
	width:2046px;
	height:91px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:31px;
	top:15px;
	width:450px;
	height:66px;
	z-index:1;
}
.no-js body #apDiv2 h1 {
	color: #D8A7A8;
}
#apDiv3 {
	position:absolute;
	left:867px;
	top:20px;
	width:478px;
	height:91px;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	left:878px;
	top:113px;
	width:97px;
	height:26px;
	z-index:3;
}
#apDiv5 {
	position:absolute;
	left:994px;
	top:111px;
	width:92px;
	height:29px;
	z-index:4;
}
#apDiv6 {
	position:absolute;
	left:1105px;
	top:110px;
	width:91px;
	height:31px;
	z-index:5;
}
#apDiv7 {
	position:absolute;
	left:1215px;
	top:112px;
	width:114px;
	height:26px;
	z-index:6;
}
</style>
</head>
<body background="bg.jpg">
<?php
include('../dbcon.php');
$res=mysql_query("SELECT * FROM video;");
?>
<div id="apDiv2">
  <h1 align="left"><img src="../img/videogallery.png" width="403" height="98"></h1>
</div>
<div id="apDiv3">
  <p><img src="../img/2.png" width="115" height="85" border="0" usemap="#Map" longdesc="../index.html">
    <map name="Map">
      <area shape="rect" coords="-10,-20,104,80" href="../index.html">
    </map>
  <img src="../img/4.png" width="115" height="85" border="0" usemap="#Map2" longdesc="../story/storyboard.php">
  <map name="Map2">
    <area shape="rect" coords="7,9,112,81" href="../story/storyboard.php">
  </map>
  <img src="../img/1.png" width="115" height="85" border="0" usemap="#Map3" longdesc="video.php">
  <map name="Map3">
    <area shape="rect" coords="3,3,111,83" href="video.php">
  </map>
  <img src="../img/3.png" width="115" height="85" border="0" usemap="#Map4" longdesc="../aboutus.html">
  <map name="Map4">
    <area shape="rect" coords="4,4,113,81" href="../aboutus.html">
  </map>
  </p>
</div>
<div id="apDiv4">
  <h1 align="center"><a href="../index.html">HOME</a></h1>
</div>
<div id="apDiv5">
  <h1 align="center"><a href="../story/storyboard.php">STORY</a></h1>
</div>
<div id="apDiv6">
  <h1 align="center"><a href="video.php">VIDEO</a></h1>
</div>
<div id="apDiv7">
  <h1 align="center"><a href="../aboutus.html">ABOUT US</a></h1>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<section class="demo" style="background-image:url(bg.jpg)">
<div class="gridster ready" style="background-image:url(../img/flr.png)">
          <ul style="height: 480px; position: relative;">
          <?php
		  while($row=mysql_fetch_array($res))
			{
			?>
			<li class="gs-w" data-row="1" data-col="1" data-sizex="2" data-sizey="1" style="background-image:url(../img/kids-videos1.jpg); 				background-size:100%;" onDblClick="javascript:location.href='playvideo.php?v=<?php echo $row[2];?>'">
			<span class="gs-resize-handle gs-resize-handle-x"></span>
			<span class="gs-resize-handle gs-resize-handle-y"></span>
			<span class="gs-resize-handle gs-resize-handle-both"></span>
            <h2 style="text-align:center; 
            font-family: Satisfy, cursive; 
            font-weight:normal;
			font-size:24px;
			
            color:#303" >
			<?php
			echo $row[1];
			?>
            </h2>
			</li>
            
			<?php
			}
			?>
          </ul>
        </div>

  </section>




<script type="text/javascript" src="gridster.js_files/jquery-1.js"></script>
<script src="gridster.js_files/jquery.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
  var gridster;

  $(function(){

    gridster = $(".gridster > ul").gridster({
        widget_margins: [10, 10],
        widget_base_dimensions: [140, 140],
        min_cols: 6,
        resize: {
            enabled: true
        }
    }).data('gridster');
  });
</script>
</body></html>