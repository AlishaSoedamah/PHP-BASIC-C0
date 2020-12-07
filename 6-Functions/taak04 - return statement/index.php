<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $koopPrijs = 75;
    $korting = 10;
    
    $geefTienPro = ($koopPrijs / 100) * $korting;
    echo ($koopPrijs / 100) * $korting;
    ?>
    <p>
    <?php
    echo $koopPrijs - $korting;
    ?>
    </p>
</body>
</html>