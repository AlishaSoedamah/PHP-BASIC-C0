<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $test1 = 10;
    $test2 = 6;
    if($test1===$test2) {
        echo "Dit is waar";
    };
    if($test1<>$test2) {
        echo "Test 1 en test 2 zijn niet hetzelfde.";
    };
    ?>
    <p>
    <?php
    if($test1>$test2) {
        echo "Test 1 is groter.";
    };
    ?>
    </p>
    <?php
    if($test1>=$test2) {
        echo "Test1 is groter of gelijk aan test2.";
    };
    ?>
    </p>
</body>
</html>