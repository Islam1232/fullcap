
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server</title>
</head>
<body>
<?php   
require "Test.php";
$test = new Test();
$test->printText();
$test->printForm(); 
?>
</body>
</html>
<form action="action_page.php">
  <div class="container">
    <h1>Зарегистрировать</h1>
    <p></p>
    <hr>

    <label for="электронная почта"><b>электронная почта</b></label>
    <input type="text" placeholder="Введите адрес электронной почты" name="электронная почта" required>

    <label for="psw"><b>Пароль</b></label>
    <input type="пароль" placeholder="Введите адрес электронной почты" name="psw" required>

    <label for="psw-repeat"><b>Повторите Пароль</b></label>
    <input type="пароль" placeholder="Повторите Пароль" name="psw-repeat" required>
    <hr>

    <p><a href="#"></a></p>
    <button type="submit" class="registerbtn">Зарегистрировать</button>
  </div>

  <div class="container signin">
    <p> <a href="#"></a></p>
  </div>
</form>
