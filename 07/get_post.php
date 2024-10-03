<?php 

// print_r($_GET);

// echo "<br>";

// $arr = ["Vl" => "vLa", "kr" => "edw"];
// array_push($_GET, $arr);
// print_r($_GET);

$_POST;

?>
<br>
<br>
<form action="" method="post">
    <label for="name">Фамилия</label>
    <input type="text" name="name">
    <br>
    <label for="id">ID</label>
    <input type="number" name="id">
    <br>
    <label for="name3">Отчество</label>
    <input type="text" name="name3">
    <br>
    <button>Send</button>
</form>
<br>
<?php 

// print_r($_POST);
echo "<br>";
$name = htmlspecialchars($_POST['name'] ?? "");
echo "Ваше имя " . $name . "<br>";

$id = (int) (strip_tags($_POST['id'] ?? ""));
echo "Ваш id " . $id . "<br>";


?>