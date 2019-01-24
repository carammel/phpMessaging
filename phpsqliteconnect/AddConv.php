<?php
  require "vendor/autoload.php";

use App\SQLiteConnection;

  $UserIDNE= (int)$_SESSION['uid'];
  if ($_POST['SendConversation'] !== null) {
    $pdo = (new SQLiteConnection())->AddConversation($UserIDNE,$_POST['subject']);
    echo "$pdo";}
?>
