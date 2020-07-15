<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miltidimentional Array!</title>
</head>
<body>
    <?php
    //Multidimentional Indexes array
    $cars=array(
        array("ab","bc","cd",200),

        array(2.22,4,"cd",200),

        array(1,444,"cd",200)
    );
    echo $cars[1][0]."</br>";
    echo $cars[2][2]."</br>";
    echo $cars[0][0]."</br>";


    //Multidimentional Associative array
    $sallaries=array(
        "may"=>array("ban"=>20000,"jhon"=>30000,"labib"=>45000),
        "june"=>array("ban"=>25000,"jhon"=>35000,"labib"=>40000),
        "july"=>array("ban"=>26000,"jhon"=>38000,"labib"=>45000)

    );
    echo $sallaries['may']['jhon']."</br>";
    echo $sallaries['july']['labib'];
    ?>
</body>
</html>