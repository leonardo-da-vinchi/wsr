<?php
require "bd.php";
session_start();
$dataForm = json_decode($_POST["dataForm"],true);
echo '<pre>';

if (sizeof($dataForm) == 2) {
    $email = $dataForm[0]['value'];
    $password = $dataForm[1]['value'];

    if ($connect) {
        $data = $connect->query("SELECT `id`, `login`, `email`, `sex`, `age`, `business`, `avatar` FROM `Users` WHERE password = '".$password."' AND email = '".$email."' ");
        if (empty($data)) {
            die("<p style='text-align: center; color: red'> Такого пользователя нет </p>");
        }
        $users = $data->fetch_all(MYSQLI_ASSOC);
        $id = $users[0]['id'];
        $login = $users[0]['login'];
        $sex = $users[0]['sex'];
        $age = $users[0]['age'];
        $business = $users[0]['business'];
        $data_sub = $connect->query("SELECT `news`, `events`, `games` FROM `Subscribes` WHERE u_id = '".$id."' ");
        $sub_id = $connect->insert_id;
        $subs = $data_sub->fetch_all(MYSQL_ASSOC);
        $news = (bool)$subs[0]['news'];
        $events = (bool)$subs[0]['events'];
        $games = (bool)$subs[0]['games'];
        $_SESSION['login'] = $login; 
    }
    require "lk-page.php";
}
else {
    $email = $dataForm[0]['value'];
    $login = $dataForm[1]['value'];
    $password = $dataForm[2]['value'];
    $sex = (int)getValFromArray($dataForm, 'sex');
    $age = (int)getValFromArray($dataForm, 'age');
    $news = (int)getValFromArray($dataForm, 'subscribes[news]');
    $events = (int)getValFromArray($dataForm, 'subscribes[events]');
    $games = (int)getValFromArray($dataForm, 'subscribes[games]');
    $business = getValFromArray($dataForm, 'business');
    $avatar = getValFromArray($dataForm, 'avatar'); 

    if ($connect) {
        $data = $connect->query("SELECT login, email FROM `Users` WHERE login = '".$login."' OR email = '".$email."' ");
        if (empty($data)){
            $connect->query("INSERT INTO `Users`(`login`, `password`, `email`, `sex`, `age`, `business`, `avatar`) VALUES ('".$login."', '".$password."', '".$email."', '".$sex."', '".$age."', '".$business."', '".$avatar."')");
            $id = $connect->insert_id;
            $_SESSION['login'] = $login;   
            $connect->query("INSERT INTO `Subscribes`(`u_id`, `news`, `events`, `games`) VALUES ('".$id."', '".$news."', '".$events."', '".$games."' )") ;   
            $sub_id = $connect->insert_id;
        require "lk-page.php";
        }
        else {
            die("<p style='text-align: center; color: red'> This email or login is using </p>");
        }
    }
}





function getValFromArray($arr, $val) {
    foreach ($arr as $key => $value) {
        if ($value['name'] == $val)
        return $value['value'];
    }
    return null;
}

