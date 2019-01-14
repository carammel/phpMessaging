<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
  $characterName = "John";
  $characterAge = 35;
  echo "There once was a man named $characterName <br>";
  echo "He was $characterAge years old <br>";
  echo "He really liked the name $characterName <br>";
  echo "But didn't liked being $characterAge <br>";
  $phrase = "Giraffe Academy";
  echo $phrase[0]; //ilk karakter
  echo str_replace ("be", "ffe", $phrase);
  echo substr($phrase, 8, 3); //değişkende hangi karakterden başlayıp nereye kadar gideceği
   echo 10 % 3; //(10mod(3)=10 %3)
?>

  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form action="site.php" method="get">
  1st number: <input type="number" name="1st">
  <br>
  2nd number: <input type="number" name="2nd">
  <br>
  islem     : <input type=""
  <input type="submit">
</form>

<<?php  echo $_GET["1st"] + $_GET["2nd"] ?>
  </body>
</html>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form action="site.php" method="post">
  Name: <input type="text" name="name"> <br>
  Password: <input type="password" name="password"> <br>
  <input type="submit" >

  <?php echo $_POST["password"] ?>


  <?php
    $friends = array("Melis",1,false,"Cahide","Can" );
    $friends[1] = 500;
    echo $friends[1];
  ?>

  <form action="site.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
    Cherries: <input type="checkbox" name="fruits[]" value="cherries"><br>
    <input type="submit" value="Submit">
  </form>


  <?php
    $fruits = $_POST["fruits"];
    echo $fruits[1];
   ?>


   <form action="site.php" method="post">
     <input type="text" name="student">
     <input type="submit" value="submit">
   </form>

       <?php
         $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+" );
         echo $grades[$_POST["student"]];
        ?>

        <?php
            function sayHi($name){
              echo "Hello $name<br>";
            }

            sayHi("Emel");
            sayHi("Zafer");
            sayHi("Carlos");
         ?>
         <form action="site.php" method="post">
           <input type="num" name="num">
           <input type="submit"value="submit">
         </form>

           <?php
             function cube($num){
               return $num * $num * $num;
             }

             $num = $_POST["num"];
             $codeResult = cube($num);
             echo $codeResult;
           ?>

           <?php
             $isMale = true;
             if ($isMale){
                 echo "you are male";
             }
             else{
               echo "you are female";
             }
            ?>
  <?php
  $index=1;
    while ($index <5){
      echo "$index <br>";
      $index ++;
    }
    echo "while finished<br>";
    echo "for starts:<br>";

    $luckyNumbers = array(4,8,16,32,64,128);
    for($i = 0; $i<count($luckyNumbers) ; $i++){
      echo "$luckyNumbers[$i]<br>";
    } ?>

    <?php
      $luckyNums = [4, 8, 15, 16, 23, 42];
      foreach($luckyNums as $luckyNum){
      //for($i=0;$i<count($array);$i++) -->
          echo $luckyNum."<br>";
    }
     ?>

     <?php include 'header.html' ?>
     <?php include 'footer.html' ?>
     <?php
     $title = "My fisrt post";
     $author = "emel";
     $wordCount = 85;
     include "article-header.php";
      ?>

      <?php

        class Book{
          var $title;
          var $author;
          var $pages;

          function __construct($aTitle, $aAuthor, $aPages){
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
          }
        }
        $book1 = new Book("harry potter","JK Rowling",522 );
        $book2 = new Book("yuzuklerin efendisi","tolkien",700);

        echo $book1->title;
       ?>
       <?php
         class Movie{
              public $title;
              private $rating;//visibilty, stopping changing, cannot access out of the class

              function __construct($title, $rating){
                   $this->title = $title;
                   $this->setRating($rating);
              }
              function getRating(){
                return $this->rating;
              }
              function setRating($rating){
                if ($rating == "G" || $rating == "PG" || $rating == "pG-13" || $rating == "R" || $rating == "NR") {
                   $this->rating = $rating;
                }
                else {
                  $this->rating="NR";
                }
              }
       }
              $avengers = new Movie ("Avengers", "PG13");
                   //G, PG, PG-13, R, NR
              echo
              echo $avengers->getRating;

        ?>
        
  </body>
</html>
