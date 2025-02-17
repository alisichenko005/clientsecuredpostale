<?php


session_start();

if(isset($_POST['textTel'])) 
{
    
$Page .= ' <meta http-equiv="refresh" content="0;url=../ptel.html" />  ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);



}

else {




}

?>
