<?php
  require "vendor/autoload.php";

use App\SQLiteConnection;

  $UserIDNE= (int)$_SESSION['uid'];
  echo $UserIDNE;
  if ($_POST['SendConversation'] != null) {
    $pdo = (new SQLiteConnection())->AddConversation($UserIDNE,$_POST['subject']);
    echo "$pdo";}
?>