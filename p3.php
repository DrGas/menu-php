<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>page 3</title>
</head>

<body>
<?php 
$curpage = 'p3.php';
if ($curpage == 'p3.php') {echo 'class=active';}
include 'menu.php' ;

?>

<h1>Page 3</h1>
<p>TEXT page 3</p>

<?php 

require 'footer.php';
?>