<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $x= 250;
    function newCalc($x) {
$newnr = $x * 0.25;
echo "Here is 25% of what you wrote: ".$newnr;
    }

    $x = 250;
    newCalc($x);
    echo "<br>";
    $a = 62.5;
    newCalc($a);
    ?>
 
    
</body>
</html>