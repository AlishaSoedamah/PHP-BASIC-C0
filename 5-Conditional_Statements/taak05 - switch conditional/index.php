<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $score = 5;

    switch($score) {
        case 10:
        echo "Wow wat een fantastische score!";
        break;
        case 9:
        echo "Wow bijna alle punten nog 1 te gaan!";
        break;
        case 8:
        echo "Goed bezig, bijna alle punten!";
        break;
        case 7:
        echo "Ga zo door!";
        break;
        case 6:
        echo  "Really pushing it are we?";
        break;
        case 5:
        echo "I know you tried, its not good enough tho.╰(*°▽°*)╯";
        default:
        echo "Nog even oefenen dan haal je vast alle punten!";
    }
    ?>
</body>
</html>