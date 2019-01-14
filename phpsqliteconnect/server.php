<?php
session_start();
if (isset($_POST['obi'])){
$user=$_POST['obi'];
$db = new PDO('sqlite:db\emel.db');
$query = $db->query(sprintf("SELECT * FROM users where username= :username;"));
$query->execute([':username'=> $user]);
$result = $query->fetchAll();
//print_r($result);

foreach ($result as $finally) {
  $uid[]=$finally['id'];
  $users[]=$finally['username'];
  $acode[]=$finally['acode'];
}
if ($users !=null) {
  	  $_SESSION['username'] = $users[0];
      $_SESSION['uid'] = $uid[0];
      $_SESSION['acode'] = $acode[0];
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: home.php');
}
}
 ?>
