<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php require "blocks/header.php" ?>

    <div class="main">
      <div class="contentbox">
        <div class="container">
          <h1>Рекламно-информационное агентство</h1><br>
          <h4>Будем рады, если Вы обратитесь в наше Агентство. Мы готовы предложить Вам передовые решения для продвижения Вашего бизнеса.</h4><br>
          <div class="contactBlock">
            <input type="text" name="imputBox1" value="Номер телефона">
            <a href="#">Обратный звонок</a>
          </div>
        </div>
      </div>
    </div>

    <div class="newsBlock">
      <div class="container">
        <h1>Новости</h1>
        <div class="row justify-content-center">
          <?php
          $user = 'root'; // пользователь

          $password = 'root'; // пароль

          $db = 'test'; // название бд

          $host = 'localhost:3307'; // хост

          $charset = 'utf8'; // кодировка
          $pdo = new PDO("mysql:host=$host;dbname=$db;cahrset=$charset", $user, $password);
          $sql = 'SELECT date, message FROM news';
          $query = $pdo -> query($sql);
          while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

              echo '<div class="col item">
                <span>'.$row['date'].'</span>
                <h4>'.$row['message'].'</h4>
                <a href="#">Подробнее</a>
              </div>';

          }
          ?>
        </div>
      </div>

      <div class="circles">
        <a href="#">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="6" cy="6" r="6" fill="#D51522"/>
          </svg>
        </a>
        <a href="#">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="6" cy="6" r="6" fill="#CACACA"/>
          </svg>
        </a>
        <a href="#">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="6" cy="6" r="6" fill="#CACACA"/>
          </svg>
        </a>

      </div>

    </div>
    <?php require "blocks/footer.php" ?>
  </body>
</html>
