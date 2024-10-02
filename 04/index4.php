<?php 
$args = ['1', '2', '3', '4'];
for ($i=0; $i < count($args) ; $i++) { 
    echo $args[$i] . "<br>";
}
echo "<br>";

$r = 3;
$c = 4;
$i = 1;
echo "<table border =\"1\">";
while($i <= $r){
 echo "<tr>";
 $j = 1;
    while($j <= $c) {
        echo "<td>R ". $i ." C ". $j ."</td>";
        $j++;
    }
 echo "</tr>";
 $i++;
}
echo "</table>";
?>
<br>
<?php 
$year = 1922;
echo "<select>";
while($year <=2024) {
    echo "<option value=".$year.">$year</option>";
    $year++;
}
echo "</select>";
echo "<button>GO!</button>"
?>
<br>
<br>
<?php 
$names = ['Vlad' , "Kristina", 'Miroslava', 'Olivia'];

foreach($names as $name) {
    echo $name . "<br>";
};
?>