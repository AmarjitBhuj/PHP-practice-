<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  function sum($a,$b){
    $sum = $a + $b; 
    echo "The sum is ".$sum;
  }
  sum(10,20);
  echo "<br>";
  sum(15,30);
  echo "<br>";

  function hi(){
    echo "My name is Aashraya";
  }
  hi();
    ?>
</body>
</html>