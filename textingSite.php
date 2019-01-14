<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
function sendChat($name, $chat){
  $name = $_POST["name"];
  $chat = $_POST["writeArea"];
}

    $yazi = $_POST["writeArea"];
    echo $yazi;
     ?>

    <form action="textingSite.php" method="post">
      Name: <input type="text" name="Name"><br>
      <input type="text" name="writeArea"><br>
      <input type="submit" value="submit">
    </form>
  </body>
</html>
