<?php


$to = 'furkanilbay@yandex.com';
$isim = $_POST['isim'];
// Email Subject
$subject = 'BAU NRS';
$baslik = 'BAU NRS'.$isim;
$metin = $_POST['metin'].'\n Telefon:'.$_POST['telefon'].'\n Mail:'.$_POST['posta'];
$from = $_POST['posta'];  

// Domain to show the email from
$fromEmail = $_POST['posta'];

// Construct a header to send who the email is from
$header = 'From: ' . $isim. '<' . $from . '>';
$msg = wordwrap($metin,70);

// send email
mail($to,$baslik,$msg,$header);

?>