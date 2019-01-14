<?php
  include_once('class.database.php');


  class ManageUsers extends
  {
    public $link;
    function __construct()
    {
      $db_connection= new dbConnection();
      $this->link = $db_connection->connect();
      return $this->link;
    }

    function registerUsers($username,$password,$ip_add,$date,$time){
      $query = $this->link->prepase("INSERT INTO users(username,password,ip_add,reg_date,reg_time)") VALUES (?,?,?,?,?);
      $values = array($username,$password,$ip_add,$time,$date);
      $query->execute($values);
      $counts = $query->rowCount();
      return $counts;
    }
  }

$users = new ManageUsers();
echo $users->registerUsers('bob','bob','127.0.0.1');

 ?>
