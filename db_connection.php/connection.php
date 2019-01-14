<?php

/**
 *
 */
class SQLiteInsert
{
  private $pod;

  function __construct($pod)
  {
    $this->pdo = $pdo;
  }

  function InserProject($projectName)
  {
    $sql= 'INSERT INTO projects(projectName) VALUES(:projectName)';
    $stmt= $this->pdo ->prepare($sql);
    $stmt->bindValue(':projectName', $projectName)
    $stmt->execute();

    return
  }
}


 ?>
