<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>api check email</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="text-center">

<?php 
    error_reporting(E_ALL);
    require_once "MailHelper.php";

    if (!empty($_POST['email']) && !empty($_POST['text'])) {
        $mail = new MailHelper($_POST['email'], $_POST['text']);

        if (!$mail->checkEmail()) {
            echo "<p>Ваш адрес не прошел проверку. Сообщение не отправлено.</p><br>";
        }
    }

    require_once "send_form.php";
?>
</body>
</html>
