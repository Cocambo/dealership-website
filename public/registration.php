<?php 
require_once __DIR__ . '/src/helpers.php';
checkGuest();
?>;
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registration</title>
   <link rel="stylesheet" href="css/registration-style.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link rel="icon" href="img/favicon1.ico" type="image/x-icon">
   <link rel="shortcut icon" href="img/favicon1.ico" type="image/x-icon">
</head>
<body>
   <header>
      <a href ="main.php"><span class = "logo"><img src = "images/logo111.svg"></span></a>
   </header>


   <div class="wrapper">
      <form action = "src/actions/registration.php" method = "post" >
         <h1>Регистрация</h1>
         
         <div class="input-box">
            <input type="text" id = "fName" placeholder="Имя" name = "fName" required>
            <i class='bx bx-user'></i>
         </div>

         <div class="input-box">
            <input type="text" id = "sName" placeholder="Фамилия" name = "sName" required>
            <i class='bx bx-user'></i>
         </div>

         <div class="input-box">
            <input type="text" id = "emailField" name = "email" oninput="checkEmail()" placeholder="Электронная почта" required>
            <i class='bx bx-envelope' ></i>
            <div id="tooltip">Введите корректный Email</div> <!-- Подсказка -->
            <p id="result"></p>
         </div>

         <div class="input-box">
            <input type="password" id = "passwordField" name = "password" oninput="checkPassword()" placeholder="Пароль" required>
            <i class='bx bxs-lock-alt'></i>
            <div id="tooltip2">Введите корректный пароль</div> <!-- Подсказка -->
            <p id="result2"></p>
         </div>

         <div class="input-box">
            <input type="password" id = "confirmpasswordField" name = "confirmPassword" oninput="checkconfirmPassword()" placeholder="Повторите пароль" required>
            <i class='bx bx-lock' ></i>
            <div id="tooltip3">Введите корректный пароль</div> <!-- Подсказка -->
            <p id="result3"></p>
         </div>

         <div class="remember">
            <label for=""><input type="checkbox" required>Согласитесь с нашими условиями и положениями</label>
         </div>

         <button type="submit" class="btn" id="registerBtn" disabled>Зарегестрироваться</button>

         <div class="register-link">
            <p>Уже зарегестрированы? <a href="login.php">Войти</a></p>
         </div>


      </form>
   </div>



   <script>
      function checkconfirmPassword(){
         let password = document.querySelector('#passwordField').value.trim();
         let confirmPassword = document.querySelector('#confirmpasswordField').value.trim();
         if (password !== confirmPassword) {
            document.getElementById('result3').textContent = '';
            document.getElementById('tooltip3').textContent = 'Пароли не совпадают.';
            tooltip3.style.display = 'block'; // Показать подсказку
         }
         else {
            document.getElementById('result3').textContent = 'Пароли совпадают.';
            document.getElementById('result3').style.color = '#00FF00';
            tooltip3.style.display = 'none'; // Скрыть подсказку, если пароли совпадают
         } 
         validateForm();
      }

      function checkEmail(){
         let email = document.querySelector('#emailField').value.trim();
         const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Регулярное выражение для проверки email

         const tooltip = document.getElementById('tooltip');

         if (!email.includes('@')){
            document.getElementById('result').textContent = '';
            document.getElementById('tooltip').textContent = 'Отсутствует знак "@"';
            tooltip.style.display = 'block'; // Показать подсказку
         }
         else if(!email.includes('.'))
         {
            document.getElementById('result').textContent = '';
            document.getElementById('tooltip').textContent = 'Отсутствует знак "."';
            tooltip.style.display = 'block'; // Показать подсказку
         }
         else if (!(regex.test(email))) {
            document.getElementById('result').textContent = '';
            document.getElementById('tooltip').textContent = 'Введите корректный Email!';
            tooltip.style.display = 'block'; // Показать подсказку
         }
         else {
            document.getElementById('result').textContent = 'Электронная почта введена верно!';
            document.getElementById('result').style.color = '#00FF00';
            tooltip.style.display = 'none'; // Скрыть подсказку, если email корректный
         } 
         validateForm();
      }

      function checkPassword(){
         let password = document.querySelector('#passwordField').value.trim();
         const tooltip2 = document.getElementById('tooltip2');

         const lengthCondition = password.length >= 8;
         const upperCaseCondition = /[A-Z]/.test(password);  //Условия проверки
         const specialCharacterCondition = /[\W_]/.test(password);

         if (!lengthCondition){
            document.getElementById('result2').textContent = '';
            document.getElementById('tooltip2').textContent = 'Пароль должен содержать минимум 8 символов.';
            tooltip2.style.display = 'block'; // Показать подсказку
         }
         else if(!upperCaseCondition)
         {
            document.getElementById('result2').textContent = '';
            document.getElementById('tooltip2').textContent = 'Пароль должен содержать хотя бы одну заглавную букву.';
            tooltip2.style.display = 'block'; // Показать подсказку
         }
         else if (!specialCharacterCondition) {
            document.getElementById('result2').textContent = '';
            document.getElementById('tooltip2').textContent = 'Пароль должен содержать хотя бы один спец. символ.';
            tooltip2.style.display = 'block'; // Показать подсказку
         }
         else {
            document.getElementById('result2').textContent = 'Пароль введен верно!';
            document.getElementById('result2').style.color = '#00FF00';
            tooltip2.style.display = 'none'; // Скрыть подсказку, если email корректный
         } 
         checkconfirmPassword();
         validateForm();
      }

      function validateForm() {
            let email = document.querySelector('#emailField').value.trim();
            let password = document.querySelector('#passwordField').value.trim();
            let confirmPassword = document.querySelector('#confirmpasswordField').value.trim();

            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            let passwordLength = password.length >= 8;
            let passwordUpper = /[A-Z]/.test(password);
            let passwordSpecial = /[\W_]/.test(password);
            let passwordsMatch = (password == confirmPassword);

            let canSubmit =
               emailRegex.test(email) &&
               passwordLength &&
               passwordUpper &&
               passwordSpecial &&
               passwordsMatch;
               
            if (canSubmit == true){
               document.getElementById('registerBtn').disabled = false;
            }
            else {
               document.getElementById('registerBtn').disabled = true;
            }
            
         }


   </script>
















   
</body>
</html>