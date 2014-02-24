<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Story Gallery</title>
	
	<link rel="stylesheet" href="css/global.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>
<style type="text/css">
#apDiv4 {
	position:absolute;
	left:227px;
	top:6px;
	width:97px;
	height:26px;
	z-index:3;
}
#apDiv1 {
	position:absolute;
	left:502px;
	top:8px;
	width:485px;
	height:37px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:513px;
	top:13px;
	width:103px;
	height:28px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:119px;
	top:5px;
	width:103px;
	height:28px;
	z-index:2;
}
#apDiv5 {
	position:absolute;
	left:329px;
	top:5px;
	width:103px;
	height:28px;
	z-index:2;
}
#apDiv6 {	position:absolute;
	left:513px;
	top:13px;
	width:103px;
	height:28px;
	z-index:2;
}
</style>
</head>
<body>
<div id="apDiv1">
  <div id="apDiv3">
    <h1><a href="story/storyboard.php">STORY</a></h1>
  </div>
  <div id="apDiv4">
    <h1><a href="video/video.php">VIDEO</a></h1>
  </div>
  <div id="apDiv5">
    <h1><a href="aboutus.html">ABOUT US</a></h1>
  </div>
</div>
<div id="apDiv2">
  <h1><a href="index.html">HOME</a></h1>
</div>
<p>
  <?php
include('dbcon.php');
if($title=$_GET["story"])
{
$res=mysql_query("select * from story where title='$title'");

if($row=mysql_fetch_array($res))
{
$story=str_split($row[3],500);
$res1=mysql_query("select * from imgloc where id='$row[4]'");
?>
</p>
<p>&nbsp;</p>
<div id="adm"></div>

				<div id="container">
				<div id="example">
			<img src="img/new-ribbon.png" width="112" height="112" alt="New Ribbon" id="ribbon">
              
			<div id="slides">
				<div class="slides_container">
					<div class="slide" style="background-image:url(img/1573003.jpg); background-size:100%;">
					
						
						
						<div class="caption">
							<p><h3 style=" font-family: Satisfy, cursive; 
            								font-weight:normal;
											font-size:24px;"><?php echo $title; ?></h3></p>
						</div>
					</div>
                    <?php 
					$i=0;
					while($i<count($story))
					{
						
					?>
                  
<div class="slide">
                                                 <div class="pic" style="background-image:url(
                                                    <?php
                                                    
                                                    if($row1=mysql_fetch_array($res1))
                                                        echo $row1[1];
                                                    else
                                                        echo "img/Tom-and-Jerry.jpg";
                                                    ?>); background-repeat:no-repeat; background-position:center">
                                                 </div>
                                                 
                                            <div class="story">
                                            <p><h3 style=" font-family: Satisfy, cursive; 
                                                                font-weight:normal;
                                                                font-size:24px;">
                                                                <?php echo "<br>".$story[$i]; ?> </h3></p>
                                            </div>
                                            
                                                        <div class="caption">
                                                            <p> <h3 style=" font-family: Satisfy, cursive; 
                                                                            font-weight:normal;
                                                                            font-size:24px;">
                                                                            <?php echo $title; ?></h3></p>
                                                        </div>
				  </div>
				<?php
					$i++;
					}
				?>
					
					
					
				</div>
				<a href="#" class="prev"><img src="img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
				</div>
				<img src="img/frame.png" width="880" height="480" alt="Example Frame" id="frame">
				</div>
</div>
    <?php
}
else
echo "Oops!.... invalid story ";
}
	?>
</body>

</html>
