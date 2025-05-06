<?php

require_once __DIR__ . '/../helpers.php';

$email = trim($_POST['email']) ?? null;
$password = trim($_POST['password']) ?? null;

$user = findUser($email);

if (!$user)
{
   setMessage('error', "Пользователь $email не найден!");
   redirect('/login.php');
}

if(!password_verify($password, $user['user_password'])){
   setMessage('error', "Неверный пароль!");
   redirect('/login.php');
}
  

$_SESSION['user']['id'] = $user['id'];

redirect('/main.php');
