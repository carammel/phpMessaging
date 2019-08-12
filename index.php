<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Welcome</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <form action="index.php" method="post">
          <label for="obi">What is your Name ?</label>
          <input type="text" class="form-control form-control-lg" name="obi"><br>
          <input type="submit" class="btn btn-primary" name="login" value="submit">
        </form>
      </div>
    </div>
  </body>
</html>
<?php include('server.php') ?>
