<?php
  require "vendor/autoload.php";

use App\SQLiteConnection;

  $UserIDNE= (int)$_SESSION['uid'];
  if ($_POST['subject'] != null) {
    $pdo = (new SQLiteConnection())->AddConversation($UserIDNE,$_POST['subject']);
    echo "Your conversation is started carefully, you can continue on Home page";
  }
  else{
      echo "Subject cannot be empty!!";
  }
?>