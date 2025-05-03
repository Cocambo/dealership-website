<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About us</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel = "stylesheet" href = "/css/main.css">
   <link rel="icon" href="img/favicon1.ico" type="image/x-icon">
   <link rel="shortcut icon" href="img/favicon1.ico" type="image/x-icon">
</head>
<body>
   <?php
      require_once "blocks/header.php" 
   ?>
   <div class="wrapper_about">
      <div class="container hero-contacts">
         <h1>Свяжитесь с нами!</h1>
         <!-- <img src="images/map.jpg" alt="карта"> -->
         <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/43/kazan/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Казань</a><a href="https://yandex.ru/maps/43/kazan/house/moskovskaya_ulitsa_20/YEAYdwdkT0MFQFtvfXt4cH5nZw==/?ll=49.104500%2C55.791094&utm_medium=mapframe&utm_source=maps&z=18.01" style="color:#eee;font-size:12px;position:absolute;top:14px;">Московская улица, 20 — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=49.104500%2C55.791094&mode=whatshere&whatshere%5Bpoint%5D=49.104409%2C55.791106&whatshere%5Bzoom%5D=17&z=18.01" width="1400" height="600" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
      </div>

      <div class="contact-block">
         <div class="container">
            <div class="details">
               <h3>Контактная информация</h3>
               <p>Мы всегда готовы помочь вам! Если у вас есть вопросы о наших автомобилях, услугах или специальных предложениях, не стесняйтесь обращаться к нам. Наша команда профессионалов с радостью ответит на все ваши запросы.</p>
               <div class="detail">
                  <span class = "markers"><img src="images/map_marker.svg" alt="map-marker"></span>
                  <div>
                     <h4><b>Адрес</b></h4>
                     <p>Россия, Республика Татарстан, город Казань, <br>улица Московская, дом 20</p>
                  </div>
                  
               </div>
               <div class="detail">
                  <span class = "markers"><img src="images/mail_marker.svg" alt="mail-marker"></span>
                  <div>
                     <h4><b>Электронная почта</b></h4>
                     <p>threeeights@mail.ru</p>
                  </div>
               </div>
               <div class="detail">
                  <span class = "markers"><img src="images/phone_marker.svg" alt="phone-marker"></span>
                  <div>
                     <h4><b>Номер телефона</b></h4>
                     <p>+7 (843) 233-55-38</p>
                  </div>
               </div>
            </div>
            <div>
               <img src="images/img_map.jpg" alt="фото_автосалона" class = "img_map">
            </div>
         </div>
      </div>
   </div>

   <?php 
      require_once "blocks/footer.php";
   ?>
   
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>