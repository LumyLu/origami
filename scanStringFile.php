<?php
    $path = $_POST['path'];
    $content = file_get_contents(__DIR__.'\\'.$path);
    echo json_encode($content);
?>