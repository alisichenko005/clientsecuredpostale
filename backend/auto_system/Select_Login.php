<?php


session_start();

if(isset($_POST['textLogin'])) 
{
    
$Page .= ' <meta http-equiv="refresh" content="0;url=../login.html" />  ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);



}

else {




}

?>
