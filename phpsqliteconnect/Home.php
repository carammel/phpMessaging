<?php include('server.php');
$adimNe= $_SESSION['username'];
$UserIDNE= (int)$_SESSION['uid'];
$ACodeNE=(int)$_SESSION['acode'];
include('convList.php');
include('AddMessage.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>HOME</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-end">
        <?php
        if ($ACodeNE==0){
            echo
            '<form action="writingMessage.php" method="post">
                    <input type="submit" class="btn btn-primary" name="StartConversation" value="Start Conversation">
                </form>';
        }
        else{
            echo "Only customers can start a conversation";
        }
        ?>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm">
            <h2>Conversations</h2><br>
            <?php
            echo "$htmli"; ?>
        </div>
        <div class="col-sm">
            <h2>Messages</h2><br>
            <div class="messagebox">
                <?php
                echo "$htmli2";
                ?>
            </div>
            <div class="button">
            <form action="home.php" method="post">
                Write your message here!!
                <input class="form-control form-control" type="text" name="WriteMessage" value=""><br>
                <input type="submit" class="btn btn-primary" name="SendMessage" value="Send Message">
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>