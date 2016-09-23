<?php 
//$curpage - find the current page and check which one is active
//using superglobal $_SERVER - it find the right path
//basename is a finction that returnes the file name from the path - so it returnes so it's visible 

$curpage = basename($_SERVER['PHP_SELF']);

?>
<ul>
	<li> <a href="index.php" <?php if ($curpage == 'index.php') {echo 'class="active"';}?>>HOME</a></li>
    <li><a href="about.php" <?php if ($curpage == 'about.php') {echo 'class="active"';}?>>ABOUT</a></li>
    <li><a href="my-projects.php"  <?php if ($curpage == 'my-projects.php') {echo 'class="active"';}?>>PROJECTS</a></li>
    <li><a href="contact-me.php" <?php if ($curpage == 'contact-me.php') {echo 'class="active"';}?>>CONTACT</a></li>
 

</ul>
