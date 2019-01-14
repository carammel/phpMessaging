<?php include('server.php');
$adimNE= $_SESSION['username'];
$UserIDNE= (int)$_SESSION['uid'];
$ACodeNE=(int)$_SESSION['acode'];
include('conv.php');
include('message.php')
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <title>HOME</title>
</head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm">
          <h2>Conversations</h2><br>
            <?php  echo "$htmli"; ?>
        </div>
        <div class="col-sm">
          <form action="home.php" method="post">
            <label for="obi">What is your Subject ?</label>
            <input type="text" class="form-control form-control-lg" name="subject"><br>
            <label for="message">What is your Message?</label>
            <input type="text" class="form-control form-control-lg" name="messageText"><br>
            <input type="submit" class="btn btn-primary" name="submit" value="Start Conversation">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
