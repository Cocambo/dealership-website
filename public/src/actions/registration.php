<?php

require_once __DIR__ . '/../helpers.php';

$fName = trim($_POST['fName']) ?? null;
$sName = trim($_POST['sName']) ?? null;
$email = trim($_POST['email']) ?? null;
$password = trim($_POST['password']) ?? null;
$confirmPassword = trim($_POST['confirmPassword']) ?? null;

$pdo = getPDO();

$query = "INSERT INTO users (first_name, second_name, email, user_password) VALUES (:first_name, :second_name, :email, :user_password)";

$params = [
   'first_name' => $fName,
   'second_name' => $sName, 
   'email' => $email,
   'user_password' => password_hash($password, PASSWORD_DEFAULT)
];

$stmt = $pdo -> prepare($query);

try{
   $stmt -> execute($params);
}
catch (\Exception $e){
   die($e -> getMessage());
}

redirect('/login.php');