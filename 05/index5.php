<?php
// include
//require
//include_once
//require_once


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'header.php'; ?> <!--В случае ошибки выдает предупреждение и продолжает работу -->


    <?php
    function sum($a = 1, $b = 1)
    {
        echo "<h2>" . $a + $b . "</h2>";
        echo '<br>';
    };

    sum();
    sum(4, 5);
    ?>

    <?php require 'header.php'; ?> <!-- Выдает фатальную ошибку-->

    <!-- <?php include_once 'header.php'; ?> -->
    <!--<?php require_once 'header.php'; ?> -->
</body>

</html>