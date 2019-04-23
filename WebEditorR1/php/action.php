<?php

if(isset($_POST)){
    $textin = $_POST["textcontent"];
//    echo $textin;
//    $textout = json_decode($textin);
//    echo $textout;
    $filename = "preview-content.html";
    echo $text;
   file_put_contents($filename, $textin);
//    file_get_contents($filename)
}

