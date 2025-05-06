<?php 
session_start();

require_once __DIR__ . '/config.php';

function redirect(string $path)
{
   header("Location: $path");
   die();
}
function setMessage(string $key, string $message)
{
   $_SESSION['message'][$key] = $message;
}
function hasMessage(string $key): bool
{
   return isset($_SESSION['message'][$key]);
}
function getMessage(string $key): string
{
   $message = $_SESSION['message'][$key] ?? "";
   unset($_SESSION['message'][$key]);
   return $message;
}

function getPDO (): PDO{
   try{
     //return new \PDO(dsn: 'mysql:host='. DB_HOST . ';dbname='. DB_NAME . ';port=' . DB_PORT, username: DB_USERNAME ,password: DB_PASSWORD);
      //return new \PDO(dsn: 'mysql:host='. DB_HOST . ';dbname='. DB_NAME, username: DB_USERNAME ,password: DB_PASSWORD);
      return new \PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
   }
   catch(\PDOException $e){
      die("Connection error: {$e ->getMessage()}");
   }
   
}

function findUser(string $email):array|bool
{
   $pdo = getPDO();
   $stmt = $pdo -> prepare("SELECT * FROM users WHERE email = :email");
   $stmt -> execute(['email' => $email]);
   return $stmt -> fetch(PDO::FETCH_ASSOC);
   
}

function currentUser(): array|bool
{
   if (!isset($_SESSION['user'])){
      return false;
   }

   $userId = $_SESSION['user']['id'] ?? null;

   $pdo = getPDO();
   $stmt = $pdo -> prepare("SELECT * FROM users WHERE id = :id");
   $stmt -> execute(['id' => $userId]);
   return $stmt -> fetch(PDO::FETCH_ASSOC);
}

function logout(){
   unset($_SESSION['user']['id']);
   redirect('/login.php');
}

function checkAuth(){
   return isset($_SESSION['user']['id']);
}

function checkGuest(){
   if (isset($_SESSION['user']['id'])){
      redirect('/main.php');
   }
}