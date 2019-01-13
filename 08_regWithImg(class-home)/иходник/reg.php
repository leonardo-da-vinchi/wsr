<?php
require "bd.php";
session_start();

$check = (bool)$_POST["sign"];

if ($check){
$login = $_POST["login"];
$password = $_POST["password"];
$email = $_POST["email"];
$sex = (int)$_POST["sex"];
$age = (int)$_POST["age"];
$news = (bool)$_POST["subscribes"]["news"];
$events = (bool)$_POST["subscribes"]["events"];
$games = (bool)$_POST["subscribes"]["games"];
$business = $_POST["business"];



if ($connect) {
    $data = $connect->query("SELECT login, email FROM `Users` WHERE login = '".$login."' OR email = '".$email."' ");
    if ($data->length == null){
     $connect->query("INSERT INTO `Users`(`login`, `password`, `email`, `sex`, `age`, `business`, `avatar`) VALUES ('".$login."', '".$password."', '".$email."', '".$sex."', '".$age."', '".$business."', 1)");
     $id = $connect->insert_id;
     $_SESSION['id'] = $id;   
     $connect->query("INSERT INTO `Subscribers`(`u_id`, `news`, `events`, `games`) VALUES ('".$id."', '".$news."', '".$events."', '".$games."' )") ;   
    $sub_id = $connect->insert_id;
    require "lk-page.php";
    }
    
    
    else {
        die("<p style='text-align: center; color: red'> This email or login is using </p>");
    }
}

}

else {
  $email = $_POST["emailin"];
  $password = $_POST["passwordin"];
  require "bd.php";
  if ($connect) {
    $data = $connect->query("SELECT id, login, email, sex, age, business FROM Users WHERE password = '".$password."' AND email = '".$email."' ");
    if ($data == null) {
        die("<p text-allign=center color=red> Такого пользователя нет </p>");
    }
    $users = $data->fetch_all(MYSQLI_ASSOC);
    $id = $users[0]['id'];
    $login = $users[0]['login'];
    $sex = $users[0]['sex'];
    $age = $users[0]['age'];
    $business = $users[0]['business'];
    $data_sub = $connect->query("SELECT news, events, games FROM Subscribers WHERE u_id = '".$id."' ");
    $sub_id = $connect->insert_id;
    $subs = $data_sub->fetch_all(MYSQL_ASSOC);
    $news = $subs[0]['news'];
    $events = $subs[0]['events'];
    $games = $subs[0]['games'];
    $_SESSION['id'] = $id; 
  }
  require "lk-page.php";
}

