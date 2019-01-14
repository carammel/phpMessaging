<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
class Chef{
     function makeChicken(){
          echo "The chef makes chicken";
     }
     function makeSalad(){
          echo "The chef makes salad";
     }
     function makeSpecialDish(){
          echo "The chef makes bbq ribs";
     }
}

class ItalianChef extends Chef {
      function makePasta(){
        echo "ItalianChef can make pasta";
      }
      function makeSpecialDish(){
           echo "The chef makes vegie foods";
      }

}

  $chef = new Chef();
  $chef->makeSpecialDish();

  $italianchef = new ItalianChef();
  $italianchef->makeSpecialDish();
 ?>

</body>
</html>
