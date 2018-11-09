<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form  action="reg.php" method="POST">
       
        <fieldset>
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <input type="email" name="email" placeholder="Email">
        </fieldset>
        
        <fieldset>
        <label for="male">Male</label>
        <input type="radio" name="sex" value="1" id="male">
        <label for="male">Famale</label>
        <input type="radio" name="sex" value="0" id="famale">
        </fieldset>
        
        <select name="business" id="business">
            <option value="student"></option>
            <option value="scoolboy"></option>
            <option value="worker"></option>
        </select>
        
        <input type="text" name="age" placeholder="Age">
        <br>
        
        <input type="checkbox" name="subscribes[news]" value = "news" id="news">
        <label for="news">news</label>
        
        <input type="checkbox" name="subscribes[events]" value = "events" id="events">
        <label for="events">events</label>
        
         <input type="checkbox" name="subscribes[games]" value = "games" id="games">
        <label for="games">games</label>
         <br>
        <input type="submit" value = "Sign up">
        
        
    </form>
</body>
</html>