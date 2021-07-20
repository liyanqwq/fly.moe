<?php

$current = $_SERVER["SCRIPT_FILENAME"];
$currentfile = explode('/',$current);

if($currentfile[count($currentfile)-1]!='index.php') header("HTTP/1.0 404 Not Found");

if (file_exists("templates/home.html")){

$home_html = fopen("templates/home.html","r");
$home_html_read = "";
while(!feof($home_html)){
    $home_html_read .= fgets($home_html);
}

}