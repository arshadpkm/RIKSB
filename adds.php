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
	left:299px;
	top:139px;
	width:803px;
	height:352px;
	z-index:5;
}
#apDiv7 {
	position:absolute;
	left:209px;
	top:150px;
	width:162px;
	height:361px;
	z-index:6;
}
#apDiv8 {
	position:absolute;
	left:250px;
	top:154px;
	width:41px;
	height:22px;
	z-index:7;
}
#apDiv9 {
	position:absolute;
	left:234px;
	top:195px;
	width:58px;
	height:23px;
	z-index:8;
}
#apDiv10 {
	position:absolute;
	left:243px;
	top:234px;
	width:44px;
	height:21px;
	z-index:9;
}
</style>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
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
<form action="save.php" method="post" enctype="multipart/form-data" name="form1" class="form-horizontal" onSubmit="MM_validateForm('title','','R','story','','R');return document.MM_returnValue" role="form">
  <div class="form-group">
    <p>
      <input name="title" type="text" class="form-control" id="title" size="50" placeholder="Title">
    </p>
<p>
  <input name="author" type="text" id="author" size="50" placeholder="Author">
    </p>
<p>
  <textarea name="story" id="story" cols="50" rows="10" placeholder="Paste your story here"></textarea>
  </p></div>
<p>Upload images (only image file select multiple images based on your story)</p>
  <p>
    <label for="f1"></label>
    <input name="upload[]" type="file" size="50" multiple="multiple" >
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary btn-lg">
    <input type="reset" name="clear" id="clear" value="Reset">
  </p>
</form>


</div>
<div id="apDiv8">Title :</div>
<div id="apDiv9">Author :</div>
<div id="apDiv10">Story :</div>
<?php
}
else
header("Location:index.html");
?>
</body>

</html>
