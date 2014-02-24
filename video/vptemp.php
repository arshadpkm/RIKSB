<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<p>
  <?php
$v=$_GET['v'];

?>
</p>

<video width="320" height="240" controls>
  <source src=<?php echo "../".$v; ?> type="video/mp4">

  Your browser does not support the video tag.
</video>

</body>
</html>