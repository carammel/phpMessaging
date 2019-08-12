<?php
require "vendor/autoload.php";

use App\SQLiteConnection;

if ($ACodeNE==0) {
    $pdo = (new SQLiteConnection())->ConversationList($UserIDNE);
    /*$query = $db->query(sprintf("SELECT * FROM Conversation where sender= :sender;"));
    $query->execute([':sender'=> $UserID]);*/
    $result = $pdo->fetchAll();
}
else if ($ACodeNE==1) {
    $pdo = (new SQLiteConnection())->ConversationList($UserIDNE);
    $result = $pdo->fetchAll();
}
else if ($ACodeNE==2) {
    $pdo = (new SQLiteConnection())->ConversationList($UserIDNE);
    $result = $pdo->fetchAll();
}
else {
    echo "Authentication Error!";
}
//print_r($result);
foreach ($result as $finally) {
    $Convid[]=$finally['id'];
    if ($adimNe==0) {
        $ConName[]=$finally['receiver'];
    }
    else if ($adimNe==1) {
        $ConName[]=$finally['sender'];
    }
    else if ($adimNe==2) {
        $ConName[]=$finally['sender'].' - ' . $finally['receiver'];
    }
    $subject[]=$finally['subject'];
}

for ($i=0; $i <count($Convid) ; $i++) {
    $htmli.='<div class="conv">
  <div class="ConName">
    conversation:'. $Convid[$i].'
  </div>
  <div class="ConSubject">
    conversation: '.$subject[$i].'
  </div>
  <div class="ConAlert">
    <i class="far fa-envelope"></i>
  </div>
</div>';
}
