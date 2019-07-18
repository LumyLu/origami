<?php
    $files = scandir('lesson');
    $regEx = "#(\s?[a-zA-Zа-яА-ЯёЁ0-9()]*\s?)+#ui";
    $arr = array();
    for($i = 0; $i < count($files); $i++){
        if($files[$i] != '.' && $files[$i] != '..'){
            $matches = array();
            if(preg_match($regEx,iconv('Windows-1251','UTF-8',$files[$i]),$matches)){
                $arr[] = $matches[0];
            }
        }
    }
    echo json_encode($arr);
?>