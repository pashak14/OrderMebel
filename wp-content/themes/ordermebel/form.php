<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $to      = 'pavelcorolenko535@gmail.com';
    $subject = 'Mebel On Order - Новый заказ';
    $message = 'Имя: '.$name."\n". 'Номер телефона: '.$phone."\n";
    $headers = 'From: mebelonorder@gmail.com' . "\r\n" .
        'Reply-To: mebelonorder@gmail.com' . "\r\n";

    mail($to, $subject, $message, $headers);

    header('Location: /');
?>