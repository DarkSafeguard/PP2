<?php



?>
<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Programming 2</title>
</head>
<body>
    <h1>Welcome to Pair Programming 2</h1>
    <?php
    echo '<h2>Adam Percival<h2>';
    echo '<h2>1/11/2022<h2>';
    echo '<h2>https://apercival.greenriverdev.com/328/PP2/index.php<h2>';
    echo '<h2>Pair Program 2<h2>';

    ?>

    <?php
    echo '<h2>PHP Array Practice</h2>';

    $numbers = array(7,9,8,9,8,8,6);
    printArr($numbers);
    function printArr(array $t){
        foreach ($t as $i){
            echo "<p>$i</p>";
        }
    }
    ?>

</body>
</html>
