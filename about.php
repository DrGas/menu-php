<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pavanam" rel="stylesheet">
</head>

<body>
<?php 
//$curpage is already in the menu, so it doens't need to be on the website

//include - it will check if it's there if not it will just continue
include 'menu.php' ;

?>

<h1>My name is Magdalena Drgas</h1>
<p>I am Multimedia Design Student</p>


<?php 
/* required - will always be there, because it is required and it will always be shown
it will stop if the file is missing, it will not continue without the right file */ 
require 'footer.php';
?>

