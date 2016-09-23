<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>page 1</title>
</head>

<body>
<?php 

//current page - page that we are now in 
$curpage = 'p1.php';
if ($curpage == 'p1.php') {echo 'class=active';}

//include - it will check if it's there if not it will just continue
include 'menu.php' ;

?>

<h1>Page 1</h1>
<p>TEXT page 1</p>


<?php 
/* required - will always be there, because it is required and it will always be shown
it will stop if the file is missing, it will not continue without the right file */ 
require 'footer.php';
?>

