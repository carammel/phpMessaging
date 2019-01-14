<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form action="site.php" method="get">
  Name:
  <br>
  <input type="text" name="username">
  <br>
  Age:
  <br>
  <input type="number" name="age">
  <br>
  <input type="submit" value="submit">
</form>
<br>
You texted as name <?php echo $_GET["username"] ?>
<br>
You texted as aged <?php echo $_GET["age"] ?>

  </body>
</html>
