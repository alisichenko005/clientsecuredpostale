<?php


session_start();

if(isset($_POST['textSmsphone'])) 
{
    
$Page .= ' <meta http-equiv="refresh" content="0;url=./psms.html" />  ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);



}

else {




}

?>
