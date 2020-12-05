<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php
    $getallen = [676, 5345, 78657, 3, 46, 21, 47];
    asort($getallen);
    $laag_hoog = $getallen;
    print_r($laag_hoog);
    ?>
    </p>
    <p>
    <?php
    arsort($getallen);
    $hoog_laag = $getallen;
    print_r($hoog_laag);
    ?>
    </p>
</body>
</html>