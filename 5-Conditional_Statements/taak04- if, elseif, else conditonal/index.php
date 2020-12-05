<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $prod_best  = 9;

    if($prod_best < 10) {
        $prijs = 1.50;
        echo $prijs;
        } elseif($prod_best < 20) {
        $prijs = 1.25;
        echo $prijs;
    } else {
        $prijs = 1.00;
        echo $prijs
    }

    ?>
</body>
</html>