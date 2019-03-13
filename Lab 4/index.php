<!DOCTYPE <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Chris Minheere</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<form action="functioncalling.php">
    <input type="text" name="txt" />
    <input type="submit" name="BTN_1" value="BTN_1" onclick="BTN1()" />
    <input type="submit" name="BTN_2" value="BTN_2" onclick="BTN2()" />
</form>

    <?php
   
    echo "<h1>_______________________</h1>";
    //==============lab 4 ===============//
    echo "<h1>lab 4</h1>";


    

    function BTN1(){
        echo "The select function is called.";
     }
     function BTN2(){
        echo "The insert function is called.";
     }

    
    ?>
</body>

</html>