<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Array!</title>
</head>
<body>
    <?php
    //first method
    $num=array(10,20,30,40,50);
    foreach($num as $hi){
        echo "$hi </br>";
    }

    #OR
    $num=[10,20,30,40,50];
    foreach($num as $hello){
        echo "</br>$hello </br>";
    }

    #second Method
    $a[0]=202;
    $a[1]=2302;
    $a[2]=2402;
    $a[3]=20552;
    $a[4]=2502;
    foreach($a as $value){
        echo "</br> $value </br>";
    }
    ?>
    
</body>
</html>