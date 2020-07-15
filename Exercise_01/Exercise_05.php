<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print odd 10 to 100!</title>
</head>
<body>
    <?php
    $a=10;
    for($a;$a<100;$a++){
        if($a%2 !=0){
            echo "$a is odd No. </br>";
        }
    }
    ?>
</body>
</html>