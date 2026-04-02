<?php

$errors = [];

$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';
$confirm = $_POST['confirm_password'] ?? '';
$email = $_POST['email'] ?? '';
$skype = $_POST['skype'] ?? '';

// логін
if (!preg_match('/^[a-zA-Zа-яА-ЯіІїЇєЄ0-9_-]{4,}$/u', $login)) {
    $errors[] = "Логін має бути не менше 4 символів і містити лише літери, цифри, _ або -";
}

// пароль
if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{7,}$/', $password)) {
    $errors[] = "Пароль має містити мінімум 7 символів, великі, малі літери та цифри";
}

// повтор
if ($password !== $confirm) {
    $errors[] = "Паролі не співпадають";
}

// пошта
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Некоректний email";
}

// скайп
if (!empty($skype)) {
    if (strlen($skype) > 255) {
        $errors[] = "Skype не може перевищувати 255 символів";
    }
    if (!preg_match('/^[a-zA-Z0-9._-]+$/', $skype)) {
        $errors[] = "Skype містить недопустимі символи";
    }
}

if (!empty($errors)) {
    include("views/registration.php");
    return;
}

header("Location: index.php?action=registration_successful");
exit;