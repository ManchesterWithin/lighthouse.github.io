<?php
    require_once "script.php";
 
    $email = mysqli_real_escape_string($link, $_POST['MailPlank']);

    if(mysqli_query($link, "INSERT INTO mails(emails) VALUES('" . $email . "')")) {
     echo 'Почта отправлена, спасибо';
    } else {
       echo "Ошибка: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($link);
 
?>