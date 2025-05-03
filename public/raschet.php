<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Credit Calculator</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel = "stylesheet" href = "/css/main.css">
   <link rel="icon" href="img/favicon1.ico" type="image/x-icon">
   <link rel="shortcut icon" href="img/favicon1.ico" type="image/x-icon">
</head>
<body>
   <?php
      require_once "blocks/header.php";
   ?>
   </div>
   <div class = "bodyy">
      <div class="container-calculator">
         <h1>Калькулятор стоимости автомобиля</h1>
         <label for="carPrice">Цена автомобиля:</label>
         <input type="number" id="carPrice" placeholder="Введите цену" required>
   
         <label for="initialPayment">Первоначальный взнос:</label>
         <input type="number" id="initialPayment" placeholder="Введите сумму взноса" required>
   
         <label for="credit">Воспользоваться кредитом</label>
         <select id="credit">
             <option value="no">Нет</option>
             <option value="yes">Да</option>
         </select>
   
         <div id="creditOptions" style="display: none;">
             <label for="bank">Выберите банк:</label>
             <select id="bank">
                 <option value="0">Выберите банк</option>
                 <option value="18">Альфа-Банк (18%)</option>
                 <option value="15">ВТБ (15%)</option>
                 <option value="20">Сбербанк (20%)</option>
                 <option value="19">Т-Банк (19%)</option>
             </select>
             
             <label for="loanTerm">Срок кредита (лет):</label>
             <select id="loanTerm">
                 <option value="12">1 год</option>
                 <option value="24">2 года</option>
                 <option value="36">3 года</option>
                 <option value="48">4 года</option>
                 <option value="60">5 лет</option>
             </select>
         </div>
   
         <button id="calculateBtn">Рассчитать</button>
         <h2 id="result"></h2>
         <h3 id="monthlyPayment"></h3>
     </div>
   </div>
   
   <?php 
      require_once "blocks/footer.php";
   ?>
   
   <script src="/js/script-raschet.js"></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>
</html>