<?php
session_start();
//Check user permission
if ($_COOKIE['user'] != "1"){
    echo "Sorry, but you don't have permission to view this page!";
    echo "<a href='N2P1RaulGarciaComments.php'>";
    echo "Click here to see my comments!"; 
    echo "</a>";
    exit();     
}
?>
<html>
 <head>
  <title>My Movie Site <?php echo $_GET['favmovie'];?></title>
 </head>
 <body>
<?php
echo "Welcome to our site, ";
echo $_SESSION['username'];
echo "! <br/>";

echo "My favorite movie is ";
echo $_GET['favmovie'];
$movierate = 5;
echo "<br>";
echo "My movie rating for this movie is: ";
echo $movierate;
echo "<br>";
date_default_timezone_set('America/New_York');
echo "Today is ";
$day = date("l");
echo $day;
?>
 </body>
</html>