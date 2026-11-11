<?php 
    $json = file_get_contents("php://input");

    $_arr = json_decode($json, true);
    $nums = array("firstNum", "secondNum", "thridNum");

    echo json_encode([$json, true]);



?>