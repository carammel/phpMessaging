<?php
namespace App;
require 'Config.php';

/**
 * SQLite connnection
 */
class SQLiteConnection {
    /**
     * PDO instance
     * var type
     */
    private $pdo;

    /**
     * return in instance of the PDO object that connects to the SQLite database
     * return \PDO
     */
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
          $stmt = $this->pdo->prepare('SELECT id,
                                              username,
                                              isAdmin
                                         FROM users
                                        WHERE username = :username;');

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
        public function InserConversation()
        {
          if ($this->pdo == null) {
              $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
          }
              $stmt = $this->pdo->prepare('SELECT id,
                                                  username,
                                                  isAdmin
                                             FROM users
                                            WHERE username = :username;');

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
}
?>
