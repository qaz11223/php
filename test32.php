<?php

if (!isset($_FILES['upload'])) exit(0);
$upload = $_FILES['upload'];


foreach($upload['error'] as $k => $vlaue){
    if ($v == 0){
        if(is_uploaded_file($upload['tmp_name'][$k])){
            if (move_uploaded_file($upload['tmp_name'][$k],
            "./upload/{$upload['name'][$k]}")){
                echo "{$upload['name'][$k]} 

            }
        }
    }
}