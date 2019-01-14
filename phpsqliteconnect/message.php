<?php
$db = new PDO('sqlite:db\emel.db');
if (isset($_POST['subject'])) {
  $query = $db->query(sprintf("INSERT INTO Conversation(sender,receiver,subject) values (:sender,:receiver,:subject);"));
  $query->execute([':sender'=> $UserIDNE,':receiver'=> 2,':subject'=> $_POST['subject'],]);
  echo "inserted to Conversation Table";
  $lastInsertID= $db->lastInsertID();
  echo "$lastInsertID";
  $query = $db->query(sprintf("INSERT INTO Message(CID,messageText) values (:CID:messageText) WHERE CID = :CID;"));
  $query->execute([':CID'=> $lastInsertID]);
  $query->execute([':messageText'=> $_POST['messageText']]);
  echo "inserted";
}
