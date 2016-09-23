<?php 
//$curpage - find the current page and check which one is active
//using superglobal $_SERVER - it find the right path
//basename is a finction that returnes the file name from the path - so it returnes so it's visible 

$curpage = basename($_SERVER['PHP_SELF']);

?>
<ul>
	<li> <a href="index.php" <?php if ($curpage == 'index.php') {echo 'class="active"';}?>>Home</a></li>
    <li><a href="p1.php" <?php if ($curpage == 'p1.php') {echo 'class="active"';}?>>Page 1</a></li>
    <li><a href="p2.php"  <?php if ($curpage == 'p2.php') {echo 'class="active"';}?>>Page 2</a></li>
    <li><a href="p3.php" <?php if ($curpage == 'p3.php') {echo 'class="active"';}?>>Page 3</a></li>
    <li><a href="p4.php" <?php if ($curpage == 'p4.php') {echo 'class="active"';}?>>Page 4</a></li>

</ul>
