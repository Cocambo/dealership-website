<?php 
require_once __DIR__ . '/src/helpers.php';
checkGuest();
?>;
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="css/login-style.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link rel="icon" href="img/favicon1.ico" type="image/x-icon">
   <link rel="shortcut icon" href="img/favicon1.ico" type="image/x-icon">
</head>
<body>
   <header>
      <a href ="main.php"><span class = "logo"><img src = "images/logo111.svg"></span></a>
   </header>
   
   <div class="wrapper">
      <form action = "src/actions/login.php" method = "post">
         <h1>Вход</h1>

         <?php if (hasMessage('error')) { ?>

         <div class="notice-error"> <?php echo getMessage('error'); ?> </div> 

         <?php } ?>   

         <div class="input-box">
            <input 
               type="text" 
               id = "emailField" 
               name = "email" 
               oninput="checkEmail()" 
               placeholder="Электронная почта" 
               required
            >
            <i class='bx bx-envelope' ></i>
            <div id="tooltip">Введите корректный Email</div> <!-- Подсказка -->
            <p id="result"></p>
         </div>

         <div class="input-box">
            <input 
               type="password" 
               id = "passwordField"
               name = "password" 
               oninput="checkPassword()" 
               placeholder="Пароль" required
            >
            <i class='bx bxs-lock-alt'></i>
            <div id="tooltip2">Введите корректный пароль</div> <!-- Подсказка -->
            <p id="result2"></p>
         </div>

         <div class="remember">
            <label for=""><input type="checkbox">Запомнить меня</label>
            <a href="#">Забыли пароль?</a>
         </div>

         <button type="submit" class="btn">Войти</button>

         <div class="register-link">
            <p>У вас нет учетной записи? <a href="registration.php">Зарегистрироваться</a></p>
         </div>

      </form>
   </div>
   <script>
      function checkEmail(){
         let email = document.querySelector('#emailField').value;
         const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Регулярное выражение для проверки email

         const tooltip = document.getElementById('tooltip');

         if (!email.includes('@')){
            document.getElementById('result').textContent = '';
            document.getElementById('tooltip').textContent = 'Отсутствует знак "@"';
            tooltip.style.display = 'block'; // Показать подсказку

            setTimeout(() => {
                tooltip.style.display = 'none';
            }, 10000); // Скрыть через 3 секунды
         }
         else if(!email.includes('.'))
         {
            document.getElementById('result').textContent = '';
            document.getElementById('tooltip').textContent = 'Отсутствует знак "."';
            tooltip.style.display = 'block'; // Показать подсказку
            setTimeout(() => {
                tooltip.style.display = 'none';
            }, 10000); // Скрыть через 3 секунды
         }
         else if (!(regex.test(email))) {
            document.getElementById('result').textContent = '';
            document.getElementById('tooltip').textContent = 'Введите корректный Email!';
            tooltip.style.display = 'block'; // Показать подсказку
            // Скрыть подсказку через несколько секунд
            setTimeout(() => {
                tooltip.style.display = 'none';
            }, 10000); // Скрыть через 3 секунды
         }
         else {
            document.getElementById('result').textContent = 'Электронная почта введена верно!';
            document.getElementById('result').style.color = 'green';
            tooltip.style.display = 'none'; // Скрыть подсказку, если email корректный
         } 
      }
      function checkPassword(){
         let password = document.querySelector('#passwordField').value;
         const tooltip2 = document.getElementById('tooltip2');

         const lengthCondition = password.length >= 8;
         const upperCaseCondition = /[A-Z]/.test(password);  //Условия проверки
         const specialCharacterCondition = /[\W_]/.test(password);

         if (!lengthCondition){
            document.getElementById('result2').textContent = '';
            document.getElementById('tooltip2').textContent = 'Пароль должен содержать минимум 8 символов.';
            tooltip2.style.display = 'block'; // Показать подсказку

            setTimeout(() => {
                tooltip2.style.display = 'none';
            }, 10000);
         }
         else if(!upperCaseCondition)
         {
            document.getElementById('result2').textContent = '';
            document.getElementById('tooltip2').textContent = 'Пароль должен содержать хотя бы одну заглавную букву.';
            tooltip2.style.display = 'block'; // Показать подсказку
            setTimeout(() => {
                tooltip.style.display = 'none';
            }, 10000);
         }
         else if (!specialCharacterCondition) {
            document.getElementById('result2').textContent = '';
            document.getElementById('tooltip2').textContent = 'Пароль должен содержать хотя бы один спец. символ.';
            tooltip2.style.display = 'block'; // Показать подсказку
            // Скрыть подсказку через несколько секунд
            setTimeout(() => {
                tooltip2.style.display = 'none';
            }, 10000);
         }
         else {
            document.getElementById('result2').textContent = 'Пароль введен верно!';
            document.getElementById('result2').style.color = 'green';
            tooltip2.style.display = 'none'; // Скрыть подсказку, если email корректный
         } 
      }








   </script>
















   
</body>
</html>