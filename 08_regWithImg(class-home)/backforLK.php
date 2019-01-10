<?php
$login_change = $_POST["login"];
$password_change = $_POST["password"];
$email_change = $_POST["email"];
$sex_change = (int)$_POST["sex"];
$age_change = $_POST["age"];
$news_change = (int)$_POST["subscribes"]["news"];
$events_change = (int)$_POST["subscribes"]["events"];
$games_change = (int)$_POST["subscribes"]["games"];
$business_change = $_POST["business"];

if ($login == $login_change and $password == $password_change and
    $email == $email_change and $sex == $sex_change and
    $age == $age_change and $news == $news_change and
    $events == $events_change and $games == $games_change and
    $business == $business_change)
{
    die("<p text-allign=center> Nothing changes </p>");
}

if ($login != $login_change) {
   $data = $connect->query("SELECT id FROM Users WHERE login = '".$login_change."' ");
    if ($data != null) {
        die("<p text-allign=center color=red> Пользователь с таким логином уже существует </p>");
    } 
}

if ($email != $email_change) {
   $data = $connect->query("SELECT id FROM Users WHERE email = '".$email_change."' ");
    if ($data != null) {
        die("<p text-allign=center color=red> Пользователь с такой почтой уже существует </p>");
    } 
}

if !($login == $login_change and $password == $password_change and
    $email == $email_change and $sex == $sex_change and
    $age == $age_change) {
    $q = "UPDATE Users SET login = '".$login_change."', password = '".$password_change."',
    email = '".$email_change."', sex = '".$sex_change."', age = '".$age_change."' WHERE id = '".$id."' ";
    $data = $connect->query($q);
    $login = $login_change;
    $password = $password_change;
    $email = $email_change;
    $sex = $sex_change;
    $age = $age_change;
    
    
}


if !($events == $events_change and $games == $games_change and
    $business == $business_change) {
    $q_sub = "UPDATE Subscribes SET news = '".$news_change."', events = '".$events_change."',
    games = '".$games_change."' WHERE u_id = '".$id."' ";
    $sub_data = $connect->query($q_sub);
    $events = $events_change;
    $games = $games_change;
    $business = $business_change;
    
}

require "lk-page.php";