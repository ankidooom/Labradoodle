<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function getFahrenheit(int $celsius){

        return ($celsius * 9/5) + 32;
    }
    function getKelvin(int $celcius){
        return ($celcius + 273);
    }

    echo "<table><tr><th>Celcius</th><th>Fahrenheit<th></tr>";
    for($celcius = -50; $celcius <= 50; $celcius+=1) {
        if ($celcius < 0){
            echo sprintf('<tr><td style="color: blue;">%d</td><td style="color: blue;">%d</td><td style="color: blue;">%d</td></tr>', $celcius, getFahrenheit($celcius), getKelvin($celcius));
        }
        if ($celcius > 0){
            echo sprintf('<tr><td style="color: green;">%d</td><td style="color: green;">%d</td><td style="color: green;">%d</td></tr>', $celcius, getFahrenheit($celcius), getKelvin($celcius));
        }

    }
    echo "</table>";
?>
</body>
</html>