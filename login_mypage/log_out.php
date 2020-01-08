<?php

session_start();

//すべてのセッションを切る(無効化)
session_destroy();

header("location:login.php")

?>