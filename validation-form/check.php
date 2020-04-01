<?php
  $login = filter_var(trim($_POST ['login']), FILTER_SANITIZE_STRING); //фильтрую значение, убираю символы HTML, FILTER_SANITIZE_STRING Фильтрует данные как обычную строку
  $pass = filter_var(trim($_POST ['pass']), FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST ['name']), FILTER_SANITIZE_STRING);

  if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина";
    exit();
  } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 16) {
    echo "Недопустимая длина пароля (От 2 до 16 символов)";
    exit();
  } else if(mb_strlen($name) < 1 || mb_strlen($name) > 20) {
    echo "Недопустимая длина имени";
    exit();
  }

  $pass = md5($pass."991238c");

  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
  $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES ('$login', '$pass', '$name')");

  $mysql->close();

  header('Location: /');
?>
