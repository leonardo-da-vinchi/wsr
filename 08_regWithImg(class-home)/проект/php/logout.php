<?php
session_start();
unset($_SESSION['login']);
session_destroy();

require "index.php";

?>