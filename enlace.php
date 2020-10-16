<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['captcha'] = $_POST['captcha'];
$_SESSION['authuser'] = 0;
setcookie('user', "1", time() + 15);
//Check username and password information
if (($_SESSION['username'] == 'Joe') and
    ($_SESSION['userpass'] == '12345')and ($_SESSION['captcha'] == true)) {
    $_SESSION['authuser'] = 1;
} else {
    $nombre_usuario = $_GET['usuario'] ?? 'wrong user';
    echo $nombre_usuario;
    echo ' sorry, but you don\'t have permission to view this page!';
    exit();     
}
?>
<html>
 <head>
  <title>Find my Favorite Movie!</title>
 </head>
 <body>
<?php
echo "Welcome to our site, ";
echo $_SESSION["username"];
echo "! <br>";
$myfavmovie = urlencode("Life of Brian");
echo "<a href='pagina.php?favmovie=$myfavmovie'>";
echo "Click here to see information about my favorite movie!"; 
echo "</a>";
?>
 </body>
</html>