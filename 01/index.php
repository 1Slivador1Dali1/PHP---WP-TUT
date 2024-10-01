<?php

echo "Hello World!";

?>
<br>
<?php  
    $name = "Alex<br>";
    echo $name;

    $name = "egg<br>";
    echo $name; 

    $name = "egg";
    echo "{$name}s<br>";

    $name = "<i>VLADOSIK</i><br>";
    echo "My name is {$name}";

    const mfd = 'id';
    echo mfd;
    // OR
    echo " - ";
    define("MFD","ID"); // CONST
    echo MFD;
?>
<br>
<?php 
    
    echo mfd . " - " . MFD;   

?>