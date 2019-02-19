<?php
require "vendor/autoload.php";

use App\SQLiteConnection;

if ($_POST['SendMessage'] != null)
{
    echo $_POST['x'];
    $a= $_POST['x'];
    $AddNew=(new SQLiteConnection())->AddMessage($a,$UserIDNE,$_POST['WriteMessage']);
    $htmli2 .=
        '<div class="messtext-sended">
            '. $adimNe .' : ' . $_POST['WriteMessage'] . '
            </div>';
}

?>