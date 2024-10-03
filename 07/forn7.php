<?php 
    $success = false;
    $contact_submit = $_POST['contact_form'] ?? "";

    if ($contact_submit == "submited") {
        $name = strip_tags(trim($_POST['name']));
        $phone = strip_tags(trim($_POST['phone'])) ;
        $text = strip_tags(trim($_POST['text'])) ;
        $yes = strip_tags(trim($_POST['yes'] ?? "")) ;

        $body = $name . "\n" . $phone . "\n" . $text . "\n" . $yes;

        if ($name == "" || $phone == "" || $text == "") {
            $errors = "Заполние необходимые поля!";
        }
        elseif (mb_strlen($name, 'utf-8') > 20) {
            $errors = "Имя не может быть длинее 20 символов";
        }
        else {
            // mail('vlas.gr@gmail.com', 'Contact Message', $body);
            $success = true;
        }

    }

?>

<h1>Contact Form</h1>
<style>
    label {
        width: 150px;
        display: block;
    }
</style>
<?php 
if ($success) {
    echo "Форма успешно отправлена";
} else {
    if (isset($errors)) echo $errors;
?>
<form action="" method="POST">
    <p><label for="name">Name:</label><input type="text" id="name" name="name"></p>
    <p><label for="phone">Phone:</label><input type="text" id="phone" name="phone"></p>
    <p><label for="text">Text:</label><textarea name="text" id="text"></textarea></p>
    <p><label for="yes">Yes or No</label><input type="checkbox" name="yes" id="yes"></p>
    <button name="contact_form" value="submited">Send Contact</button>
</form> <?php } ?>