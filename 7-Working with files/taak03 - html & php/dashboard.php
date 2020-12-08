<?php  
    require 'database.php';

    $leeftijd = 19;
?>
<html>
<head>
</head>
<body>
    </div>

    <div id="isMeerderJarig">
        <?php
            if($leeftijd > 16 ){
                echo "<h6>Je bent te cool om deze pagina te bekijken</h6>";
                echo $leeftijd;
            }
        ?>
    </div>

</body>
</html>