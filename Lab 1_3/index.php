<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Chris Minheere</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    echo "Gemaakt door:<br>Chris Minheere 99040522";
    echo "<h1>_______________________</h1>";
    //==============lab 2===============//
    //==========opdracht 1/5============//
    echo "<h1>lab 2__opdracht 1/5</h1>";
    
    echo "<h1>Hello World!</h1>";
    $array = ["<br>Learning PHP", "<br>Hello", " World!"];
    echo $array[0];
    echo "<br>";
    define("test", "$array[1]");
    echo test;
    echo "<br>";
    foreach($array as $value){
        echo $value;
    }
    echo "<br>";
    $word1 = "<h1>Hello</h1>";
    $word2 = "<h1> World!</h1>";
    echo $word1, $word2;
    echo "<br>";
    $array1 = ["Hello", " World!"];
    foreach($array1 as $value){
        echo $value;
    }
    echo "<h1>_______________________</h1>";
  //===================================//




    //==============lab 3 ===============//
    //==========opdracht A ==============//
    echo "<h1>lab 3__opdracht A</h1>";
   
    echo "<br><br>Lab3a";
    $randGetal = rand(1,10);
    $somGetal = rand(1,10);
    echo '<br>' .$randGetal. ' x ' .$somGetal. ' = ' .$randGetal * $somGetal;
    //==========opdracht B ==============//
    echo "<h1>lab 3__opdracht B</h1>";
    $randGetal1 = 1;
    $somGetal1 = 6;
    for($i = 0; $i < 10; $i++){
        echo '<br>'.$randGetal1. ' x ' .$somGetal1. ' = ' .$randGetal1 * $somGetal1;
        $randGetal1++;
    }




  //==========opdracht B_2 ==============//
  echo "<h1>lab 3__opdracht B_2</h1>";
    tafelSom(1, 6);
    
    function tafelSom($randGetal2, $getal){
        for($i = 0; $i < 10; $i++){
            echo '<br>'.$randGetal2. ' x ' .$getal. ' = ' .$randGetal2 * $getal;
            $randGetal2++;
        }
    }
    




  //==========opdracht B_3 ==============//
  echo "<h1>lab 3__opdracht B_3</h1>";
    $arrayLab3 = [3, 5, 8, 12];
    foreach($arrayLab3 as $value){
        for($i = 0; $i <= 10; $i++){
            echo '<br>'.$value. ' x ' .$i. ' = ' .$value * $i;
        }
        echo '<br>';
    }
    echo "<h1>_______________________</h1>";
    //==============lab 4 ===============//
    echo "<h1>lab 4</h1>";
    echo"test 123";

    
    ?>
</body>

</html>