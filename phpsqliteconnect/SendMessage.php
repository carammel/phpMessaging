<?php
require "vendor/autoload.php";

use App\SQLiteConnection;

if (isset($_POST['SendMessage'])) {
    $AddNew =(new SQLiteConnection())->AddMessage($_POST['Convid'],$UserIDNE,$_POST['WriteMessage']);
    $X = $_POST['Convid'];
    $state=1;
    #$MID = (new SQLiteConnection())->last_insert_rowid();
    $MID = $this;
    echo $MID;
    echo $MID;
    if ($UserIDNE ==1)
    {
        $IsUnread =(new SQLiteConnection())->AddisUnread($MID,2,$_POST['Convid'],1);
    }
    if ($UserIDNE ==2)
    {
        $IsUnread =(new SQLiteConnection())->AddisUnread($MID,1,$_POST['Convid'],1);
    }
    return $X;
}
?>