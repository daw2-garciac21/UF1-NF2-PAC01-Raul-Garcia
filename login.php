<?php
session_unset();
?>
<html>
 <head>
  <title>Please Log In</title>
 </head>
 <body>
  <form method="post" action="enlace.php">
   <p>Enter your username: 
    <input type="text" name="user"/>
   </p>
   <p>Enter your password: 
    <input type="password" name="pass"/>
   </p>
   <p>I'm not a robot: 
    <input type="checkbox" name="captcha"/>
   </p>
   <p>
    <input type="submit" name="submit" value="Submit"/>
   </p>
  </form>
 </body>
</html>