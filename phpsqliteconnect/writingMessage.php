 <?php
 session_start();
 $adimNE= $_SESSION['username'];
 $UserIDNE= (int)$_SESSION['uid'];
 $ACodeNE=(int)$_SESSION['acode'];
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
   <title>MESSAGE</title>
 </head>
   <body>
     <div class="container">
       <div class="row justify-content-center">
         <div class="col-sm">
           <h2>Message Writing</h2><br>
         </div>
         <div class="col-sm">
           <form action="writingMessage.php" method="post">
             <label for="obi">What is your Subject ?</label>
             <input type="text" class="form-control form-control-lg" name="subject"><br>
             <input type="submit" class="btn btn-primary" name="SendConversation" value="Send Conversation">
               <a class="btn btn-primary" href="Home.php" role="button">Go Back To Conversations</a>
           </form>
           <?php
           if (isset($_POST['SendConversation'])){
               include('AddConv.php');
           }
           ?>
         </div>
       </div>
     </div>
   </body>
 </html>
