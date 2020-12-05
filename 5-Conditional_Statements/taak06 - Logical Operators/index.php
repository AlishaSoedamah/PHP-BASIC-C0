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
    $var1 = 10;
    $var2 = 5;

    if($var1 < 10 && $var2 > 5) {
    echo "het getal zit tussen de 10 en de 5!";
}
 else {
    echo "het getal is groter dan 10 of kleiner dan 5!";
}
    ?>
    </p>
    <p>
    <?php
    if($var1 < 10 || $var2 > 5) {
    echo "Zijn hetzelfde";
}
 else {
    echo "Niet hetzelfde";
}
    ?>
    </p>
    <p>
    <?php
    if($var1 < 10 xor $var2 > 5) {
    echo "True";
}
 else {
    echo "False";
}
    ?>
    </p>
    <p>
    <?php
    if($var1 < 10 != $var2 > 5) {
    echo "True";
}
 else {
    echo "False";
}
    ?>
    </p>
</body>
</html>