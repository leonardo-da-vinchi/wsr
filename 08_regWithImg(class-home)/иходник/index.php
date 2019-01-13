<?php
session_start();
if (!empty($_SESSION["id"])) {
    echo "Hello< ".$_SESSION['login'];
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleForReg.css">
</head>
<body>
    <form  action="reg.php" method="POST">
      
        <input type="radio" name="sign" value="0" id="sign_in" checked>
         <label for="sign in">Авторизация</label>
        <input type="radio" name="sign" value="1" id="sign_up">
       <label for="sign up">Регистрация</label><br>
       
      
        <div class="sign-in">
        <input type="email" name="emailin" placeholder="Email" required><br>
        <input type="password" name="passwordin" placeholder="password" required>
        </div>
        
        <fieldset>
        <input type="email" name="email" placeholder="Email" id="email"><br>
        <input type="text" name="login" placeholder="login" id="login"><br>
        <input type="password" name="password" placeholder="password" id="password"><br>
        <label for="male">Male</label>
        <input type="radio" name="sex" value="1" id="male">
        <label for="famale">Famale</label>
        <input type="radio" name="sex" value="0" id="famale">
        </fieldset>
        
        <fieldset>
        <select name="business" id="business">
            <option value="student">Студент</option>
            <option value="scoolboy">Школник</option>
            <option value="worker">Работяга</option>
        </select><br>
        
        <input type="text" name="age" placeholder="Age">
        </fieldset>
        
        <fieldset>
        <input type="checkbox" name="subscribes[news]" value = "news" id="news">
        <label for="news">news</label>
        
        <input type="checkbox" name="subscribes[events]" value = "events" id="events">
        <label for="events">events</label>
        
         <input type="checkbox" name="subscribes[games]" value = "games" id="games">
        <label for="games">games</label>
         <br>
         </fieldset>
        <input type="submit" value = "Sign up">
         <input type="submit" value = "Sign in">
        
    </form>
    <script src="js/forReg.js"></script>
</body>
</html>