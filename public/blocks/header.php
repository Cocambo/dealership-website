<?php 
require_once __DIR__ . '/../src/helpers.php';
$user = currentUser();
?>
<div class="header-wrapper">
      <header class = "container">  <!-- используем класс контейнер для того, чтобы во всех таких тегах был одинаковый отступ-->
         <a href ="main.php"><span class = "logo"><img src = "images/logo111.svg"></span></a>
         <nav>
            <ul>
               <li><a href = "main.php">Главная</a></li>
               <li><a href = "/about.php">О нас</a></li>
               <li><a href = "/contacts.php">Контакты</a></li>
               <li><a href = "index.php">Автомобили</a></li>
               <li class = "search"><a href = "raschet.php">Расчет</a></li>
               <?php 
               if (checkAuth()){
                  echo '<li>' . $user['first_name']. ' ' .  $user['second_name'] . ',</li>'  . 
                  '<li><form action="src/actions/logout.php" method="post">' .
                     '<button role="button" class="button-logout">Выйти</button>' . 
                  '</form></li>';
               }
               else {
                  echo '<li class = "btn"><a href = "login.php">Войти</a></li>';
               }
               ?>
            </ul>
         </nav>
      </header>
   </div>