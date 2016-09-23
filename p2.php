<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>page 2</title>
</head>

<body>
<?php
$curpage = 'p2.php';
if ($curpage == 'p2.php') {echo 'class=active';} 
include 'menu.php' ;

?>

<h1>Page 2</h1>
<p>TEXT page 2</p>

<?php 

require 'footer.php';
?>