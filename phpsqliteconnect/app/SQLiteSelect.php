<?php
namespace APP;
require 'Config.php';
/**$user="";
$errors = array();

if isset($_POST['login']){
  $user=$_POST['username'];
  echo $user;
}
if (empty($user)) {
  array_push($errors, "Username is required");
}
if (count($errors ==0)) {

}**/

class SQLiteSelect
{
  private $pdo;

  public function __construct()
  {
    $this->pdo = $pdo;
  }

  public function SelectUser($user)
  {
      $pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
// prepare SELECT statement
        $stmt = $pdo->prepare('SELECT id,
                                            username,
                                            isAdmin
                                       FROM users
                                      WHERE username = :username;');
        $stmt->bindParam(':username', $user);
        $stmt->execute();
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
}
 ?>
