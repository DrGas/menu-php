<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php 
$curpage = 'index.php';
if ($curpage == 'index.php') {echo 'class=active';}

//include - it will check if it's there if not it will just continue
include 'menu.php' ;

?>
<h1>Welcome</h1>
<p>This is my website</p>


<?php 

require 'footer.php';
?>
</body>
</html>