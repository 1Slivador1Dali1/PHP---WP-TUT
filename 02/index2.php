<?php 
$name = "Alex";
$name2 = "Alexis";
var_dump($name);
var_dump(($name2))
?>
<br>
<?php 
//Array

$args = ['Alex Socha', 10, 76.5, true];
$args2 = array("name" => 'Alex Socha', "age" => 10 , "height" => 76.5, "is_male" => true);

var_dump($args);
?><br><?php
var_dump($args2)
?><br><?php 
echo $args2['name'];
?><br><?php
foreach ($args2 as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>