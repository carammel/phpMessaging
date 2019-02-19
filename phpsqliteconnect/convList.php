<?php
require "vendor/autoload.php";
use App\SQLiteConnection;

$db = new PDO('sqlite:db\emel.db');
if ($ACodeNE==0) {
  $query = $db->query(sprintf("SELECT * FROM Conversation where sender= :sender;"));
  $query->execute([':sender'=> $UserIDNE]);
  $result = $query->fetchAll();
}
else if ($ACodeNE==1) {
  $query = $db->query(sprintf("SELECT * FROM Conversation where receiver= :receiver;"));
  $query->execute([':receiver'=> $UserIDNE]);
  $result = $query->fetchAll();
}
else if ($ACodeNE==2) {
  $query = $db->query(sprintf("SELECT * FROM Conversation;"));
  $result = $query->fetchAll();
}
else {
  echo "Authentication Error!";
}
//print_r($result);
foreach ($result as $finally) {
  $Convid[]=$finally['id'];
  if ($ACodeNE==0) {
    $ConName[]=$finally['receiver'];
  }
  else if ($ACodeNE==1) {
    $ConName[]=$finally['sender'];
  }
  else if ($ACodeNE==2) {
    $ConName[]=$finally['sender'].' - ' . $finally['receiver'];
  }
  $subject[]=$finally['subject'];
}

for ($i=0; $i <count($Convid) ; $i++) {
    $htmli.=
        '<div class="conv">
                <div class="ConName">
                 conversation: '.$Convid[$i].'
                  </div>
                  <div class="ConSubject">
                    conversation: '.$subject[$i].'
                  </div>
                  <div class="ConAlert">
                    <i class="far fa-envelope"></i>
                  </div>
                  <div class="button">
                      <form action="" method="post">
                         <input type="submit" name="ShowMessages" value="Show Messages">
                         <input type="hidden" name="Convid" value='.$Convid[$i].'>
                      </form>
                  </div>
        </div>';
}

if (isset($_POST['ShowMessages']))
{
    $messages=(new SQLiteConnection())->MessageList($_POST['Convid']);
    for ($i=0; $i <count($messages) ; $i++) {
        if ($UserIDNE==$messages[$i]['sender']) {
            $htmli2 .= '<div class="messtext-sended">
            '. $adimNe .' : ' . $messages[$i]['messageText'] . '
            </div>';
        }
        else {
            $query = $db->query(sprintf("SELECT username FROM users where id= :id;"));
            $query->execute([':id'=> $messages[$i]['sender']]);
            $result = $query->fetchAll();
            $htmli2 .=
                '<div class="messtext-recived justify-content-end">
        '. $result[0]['username'] .' : ' . $messages[$i]['messageText'] . '
                </div>';
        }
    }
    $htmli2 .= '<div class="button">
                    <form action="" method="post">
                        Hello '.$adimNe.' Write your message here!!
                        <input class="form-control form-control" type="text" name="WriteMessage" value=""><br>
                        <input type="hidden" name="Convid" value='.$_POST['Convid'].'>
                        <input type="hidden" name="UserIDNE" value='.$UserIDNE.'>
                        <input type="submit" class="btn btn-primary" name="SendMessage" value="Send Message">
                    </form>
                    </div>';
}
if (isset($_POST['SendMessage'])) {
    include('SendMessage.php');
}
?>