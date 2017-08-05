<?php

$recepient = "youmail@ya.ru";
$sitename = "Название сайта";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
$adress = trim($_GET["adress"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone \nАдрес: $adress";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");