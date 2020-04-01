<!DOCTYPE HTML>
<html lang="ru">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Авторизация</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
   <div class="container mt-4">
     <?php
     if($_COOKIE['user'] == ''):
     ?>
   <div class="row">;
     <div class="col">
       <h1>Регистрация</h1>
       <form action="validation-form/check.php" method="post">
       <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин"><br>
       <input type="text" name="name" class="form-control" id="name" placeholder="Введите имя"><br>
       <input type="password" name="pass" class="form-control" id="pass" placeholder="Введите пароль"><br>
       <button class="btn btn-success" type="submit">Зарегистрировать</button><br>
     </form>
     </div>
     <div class="col">
       <h1>Авторизация</h1>
       <form action="validation-form\auth.php" method="post">
       <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин"><br>
       <input type="password" name="pass" class="form-control" id="pass" placeholder="Введите пароль"><br>
       <button class="btn btn-success" type="submit">Авторизоваться</button><br>
    </form>
    </div>
      <?php else: ?>
        <p>Привет <?=$_COOKIE['user']?>. Что бы выйти нажмите <a href="/exit.php">здесь</a></p>

      <?php endif;?>
    </div>
    </div>

 </body>
</html>
