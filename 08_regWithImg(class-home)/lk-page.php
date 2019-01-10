<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleForLk.css">
    <title>Личный кабинет</title>
</head>
<body>
  <button class="change">Редактировать</button>
  <button class="cancel-change" hidden>Отменить редактирование</button>
  <form action="logout.php">
      <input type="submit" value="Exiiiiit">
  </form>
  
  <input class="events-check" type="text" value="<?=$events?>" hidden>
  <input class="games-check" type="text" value="<?=$games?>" hidden>
  <input class="news-check" type="text" value="<?=$news?>" hidden>
  <input class="sex-check" type="text" value="<?=$sex?>" hidden>
  <input class="business-check" type="text" value="schoolboy" hidden>
   
    <form action="backforLK.php" method="POST">
    <label for="email">E-mail: </label>
    <input type="email" name="email" id="email" value="<?=$email?>" readonly required><br><br>

    <label for="login">Login: </label>
    <input type="text" name="login" id="login" value="<?=$login?>" readonly required><br>

    <div class="pass">
        <br><label for="password">Password: </label>
        <input type="password" name="password" id="password" value="<?=$password?>" required><br><br>
    </div>
    
    <p class="sex">
        Пол: 
        <span></span>
    </p>
    
    <div class="sex-select">
       <span>Пол: </span>
       <div class="select-items">
        <label for="male">Male</label>
        <input type="radio" name="sex" value="1" id="male">
        <label for="famale">Famale</label>
        <input type="radio" name="sex" value="0" id="famale">
        </div>
    </div>
    <br>
    <label for="age">Age:</label>
    <input type="text" name="age" id="age" value="<?=$age?>" readonly><br><br>
    
     <label for="business">Business: </label>  
        <select name="business" id="business" disabled>
            <option value="student">Студент</option>
            <option value="schoolboy">Школник</option>
            <option value="worker">Работяга</option>
        </select><br>
    
    
    <p class="subscribes">
        Subscribes: 
        <span></span>
    </p>
    
    <div class="subs-change">
      <br>
       <span>Subscribes:</span>
       <div class="select-items">
        <input type="checkbox" name="subscribes[news]" value = "news" id="news">
        <label for="news">news</label>
        
        <input type="checkbox" name="subscribes[events]" value = "events" id="events">
        <label for="events">events</label>
        
         <input type="checkbox" name="subscribes[games]" value = "games" id="games">
        <label for="games">games</label>
        </div>
        <br>
         <br>
         </div>
     <input class="submit" type="submit" value = "Сохранить изменения">
    </form>
    
    <script src="js/forLk.js"></script>
</body>
</html>