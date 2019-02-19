<?php
require "vendor/autoload.php";

use App\SQLiteConnection;

if (isset($_POST['SendMessage'])) {
    $AddNew =(new SQLiteConnection())->AddMessage($_POST['Convid'],$UserIDNE,$_POST['WriteMessage']);
    $htmli2 .= '<div class="messtext-sended">
            '. $adimNe .' : ' . $_POST['WriteMessage'] . '
            </div>';
}

?>