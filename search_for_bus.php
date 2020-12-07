<?php
    require_once "connection.php";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>reserve</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="reserve.php" method="POST">
        From: <input class="" type="text" name= "From" value=""/> <br>
        To: <input class="" type="text" name= "To" value=""/> <br>
        Date of Journey <input class="s3" type="date" name= "Date of Journey" value=""/> <br>
        Date_of_Return <input class="s4" type="date" name= "Date_of_Return" value=""/> <br>


        <br>


        <button class="" onclick="myFunction()">Search Bus</button>

    </form>
  </body>
</html>
