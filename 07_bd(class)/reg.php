<?php

$login = $_POST["login"];
$password = $_POST["password"];
$email = $_POST["email"];
$sex = (bool)$_POST["sex"];
$age = $_POST["age"];
$news = (bool)$_POST["subscribes"]["news"];
$events = (bool)$_POST["subscribes"]["events"];
$games = (bool)$_POST["subscribes"]["games"];
$business = $_POST["business"];

require "bd.php";

if ($connect) {
    $data = $connect -> query("SELECT login, email FROM Users WHERE login = '".$login."' AND email = '".$email."' ");
    $users = $data->fetch_all(MYSQLI_ASSOC);
    $user_login = $users[0]['login'];
    $user_email = $users[0]['email'];
    var_dump($users);
}


//
//echo "sex: $sex <br><br>
//games: $games <br>
//events: $events
//<br> news: $news";
