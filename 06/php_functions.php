<?php

//trim
//ltrim
//rtrim
//string_tags

$message = "    Helllo, World!     <br>";
var_dump($message);
echo $message;

$result = trim($message);
var_dump($result);

$result = ltrim($message);
var_dump($result);

$result = rtrim($message, "<br>");
var_dump($result);

$result2 = rtrim($result, "ld");
var_dump($result2);
?>
<br>
<br>
<?php 
echo date("d.m.Y h:i:s");
?>