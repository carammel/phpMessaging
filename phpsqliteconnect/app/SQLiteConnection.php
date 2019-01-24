<?php
namespace App;
require 'Config.php';

class SQLiteConnection {

    private $pdo;
    public function connect() {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
        }
        return $this->pdo;
    }

    public function SelectUser($user)
    {
      if ($this->pdo == null) {
          $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
      }
          $stmt = $this->pdo->prepare('SELECT id,username, isAdmin FROM users WHERE username = :username;');

          $stmt->execute([':username'=> $user]);
          // for storing tasks
          $users = [];

          while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
              $users[] = [
                  'id' => $row['id'],
                  'username' => $row['username'],
                  'isAdmin' => $row['isAdmin'],
              ];
          }
          return $users;
        }

    public function ConversationList($user)
    {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
        }
        $stmt = $this->pdo->prepare("SELECT id, sender, receiver, subject FROM Conversation WHERE sender = :sender OR receiver = :receiver ;");
        $stmt->execute([':sender'=> $user] OR [':receiver' =>$user]);
        // for storing tasks
        $users = [];

        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $users[] = [
                'id' => $row['id'],
                'sender' => $row['sender'],
                'receiver' => $row['receiver'],
                'subject' => $row['subject'],
            ];
        }
        return $users;
    }

    public function MessageList($CID)
    {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
        }
        $stmt = $this->pdo->query("SELECT id, CID, messageText FROM Message WHERE CID = :CID;");
        $stmt->execute([':CID'=> $CID]);
        // for storing task

        $messages = $stmt ->fetchAll();

        foreach ($messages as $finally){
            $id[]=$finally['id'];
            $messageText[]=$finally['messageText'];
        }

        /*while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $messages[] = [
                'id' => $row['id'],
                'messageText' => $row['messageText'],
                'CID' => $row['CID'],
            ];
        }*/
        return $messages;
    }

    public function AddConversation($sender, $subject)
      {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
        }
        //$query = $this->pdo->query(sprintf("INSERT INTO Conversation(sender,receiver,subject) values (:sender,:receiver,:subject);"));
        $query = $this->pdo->prepare("INSERT INTO Conversation(sender,receiver,subject) values (:sender,:receiver,:subject);");
        $query->execute([':sender'=> $sender,':receiver'=> 2,':subject'=> $subject,]);

        return "success";
          }

    public function AddMessage($CID,$sender, $receiver, $messageText)
    {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
        }
        //$query = $this->pdo->query(sprintf("INSERT INTO Conversation(sender,receiver,subject) values (:sender,:receiver,:subject);"));
        $query = $this->pdo->prepare("INSERT INTO Conversation(CID,sender,receiver,messageText) values (:CID,:receiver,:sender,:messageText);");
        $query->execute([':CID'=> $CID,'sender'=>$sender,'receiver'=>$receiver,':messageText'=> $messageText,]);

        return "success";
    }
}
?>
