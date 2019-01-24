<?php
  $user=$_POST['obi'];
  session_start();
  $db = new PDO('sqlite:db\emel.db');
  echo $user;
  $query = $db->query(sprintf("SELECT * FROM users where username= :username;"));
  $query->execute([':username'=> $user]);
  $result = $query->fetchAll();
  foreach ($result as $finally)
  {
    $users[]=$finally['username'];
    $Uid[]=$finally['id'];
    $isAdmin[]=$finally['isAdmin'];
  }

  if (count($result) !=0){
    print_r($users);
    print_r($Uid);
    print_r($isAdmin);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome To the DarkSide</title>
  </head>
  <body>
    <form action="index.php" method="post">
      What is your Name: <input type="text" name="username"><br>
      <input type="submit" name="login" value="submit">
    </form>
  </body>
</html>
require "vendor/autoload.php";

use App\SQLiteConnection;

if (isset($_POST["username"])){
  $user= $_POST["username"];
  $pdo = (new SQLiteConnection())->SelectUser($user);
  if ($pdo !=null) {
    print_r($pdo);
    echo "$user is a normal user";
  }
  else {
    echo "user not found!";
  }
}
<?php
require "vendor/autoload.php";

use App\SQLiteConnection;
use App\SQLiteSelect;

/**$pdo = (new SQLiteConnection())->connect();
  if ($pdo!=null) {
    echo "Connected to the SQLite database successfully...";
  }
  else {
    echo "Whoops, couldnt...";
  }**/
$user= $_POST['username'];
$pdo = (new SQLiteSelect())->SelectUser($user);
if ($pdo !=null) {
  echo "user is: $user";
}
else {
  echo "user not found!";
}
?>

<?php
$db = new PDO('sqlite:db\emel.db');
if (isset($_POST['submit'])) {
  $query = $db->query(sprintf("INSERT INTO Conversation(sender,receiver,subject) values (:sender,:receiver,:subject);"));
  $query->execute([':sender'=> $UserIDNE,':receiver'=> 2,':subject'=> $_POST['subject'],]);
  echo "inserted to Conversation Table";
  $lastInsertID= $db->lastInsertID();
  $query = $db->query(sprintf("INSERT INTO Message(CID,messageText) values (:CID,:messageText)"));
  $query->execute([':CID'=> 5,':messageText'=>$_POST['messageText'],]);
  $query->execute([':messageText'=> $_POST['messageText']]);
  echo "inserted";
}
?>
<?php
  echo gettype($_POST['StartConversation']);
  if ($_POST['StartConversation'] !== null)
  {
    include('writingmessage.php');
  }
 ?>
<!––<label for="obi">What is your Subject ?</label>-->
<!––<input type="text" class="form-control form-control-lg" name="subject"><br>-->
<!––<label for="message">What is your Message?</label>-->
<!––<input type="text" class="form-control form-control-lg" name="messageText"><br>-->

HOME.PHP -----
