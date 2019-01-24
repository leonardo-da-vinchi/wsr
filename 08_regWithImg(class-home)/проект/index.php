<?php 
session_start();
if (!empty($_SESSION["login"])) {
    echo "Hello ".$_SESSION['login'];
}
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <form action="#">
      <input type="radio" name="sign" value="0" id="sign_in_checked" checked />
      <label for="sign_in_checked">Авторизация</label>
      <input type="radio" name="sign" value="1" id="sign_up_checked" />
      <label for="sign_up_checked">Регистрация</label><br /><br />
    </form>

    <form action="#" method="POST" class="sign-in">
      <input
        type="email"
        name="emailin"
        placeholder="Email"
        class="email"
        required
      /><br />
      <input
        type="password"
        name="passwordin"
        placeholder="password"
        class="password"
        required
      /><br />
      <input type="submit" value="Sign in" />
    </form>

    <form action="#" method="POST" class="sign-up">
      <fieldset>
        <input
          type="email"
          name="email"
          placeholder="Email"
          class="email"
        /><br />
        <input
          type="text"
          name="login"
          placeholder="login"
          class="login"
        /><br />
        <input
          type="password"
          name="password"
          placeholder="password"
          class="password"
        /><br />
        <label for="male">Male</label>
        <input type="radio" name="sex" value="1" id="male" />
        <label for="famale">Famale</label>
        <input type="radio" name="sex" value="0" id="famale" />
      </fieldset>

      <fieldset>
        <select name="business" id="business">
          <option value="student">Студент</option>
          <option value="scoolboy">Школник</option>
          <option value="worker">Работяга</option> </select
        ><br />

        <input type="text" name="age" placeholder="Age" />
      </fieldset>

      <fieldset>
        <input type="checkbox" name="subscribes[news]" value="1" id="news" />
        <label for="news">news</label>

        <input
          type="checkbox"
          name="subscribes[events]"
          value="1"
          id="events"
        />
        <label for="events">events</label>

        <input type="checkbox" name="subscribes[games]" value="1" id="games" />
        <label for="games">games</label> <br />
        <label for="image">Выберите аватар</label>
        <input id="image" type="file" name="image" accept="image/*" />
      </fieldset>
      <input type="submit" value="Sign up" />
    </form>

    <script src="script/jquery-3.3.1.min.js"></script>
    <script src="script/signUpOrInShowing.js"></script>
    <script src="script/submit.js"></script>
  </body>
</html>
