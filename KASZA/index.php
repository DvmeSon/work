<?php 
		$result="";
		if(isset($_POST['sendmail'])) {
            require 'PHPMailerAutoload.php';
            require 'class.phpmailer.php';
            require 'class.smtp.php';

			$mail = new PHPMailer;

			// $mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = '';                 // SMTP username
			$mail->Password = '';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom($_POST['email'], $_POST['name']);
			$mail->addAddress('');     // Add a recipient
			$mail->addReplyTo($_POST['email'], $_POST['name']);

			$mail->isHTML(true);
			$mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h1>';

			if(!$mail->send()) {
				$result="Coś poszło nie tak. Spróbuj jeszcze raz.";
			}
			else{
				$result="Dziękujemy ".$_POST['name']." za skontaktowanie się z nami.";
			}
		}
		
	 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="fotowoltaika, energia, prąd, panele fotowoltaiczne">
   
    <title>Bogdano | Witaj </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="static/styles/style.css"/>
  
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark sticky-top">
            <a class="navbar-brand" href="index.html"><img src="" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Strona Główna<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#onas">O Nas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="oferta.html">Oferta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontakt</a>
                </li>
              </ul>
            </div>
            <div class="social grow">
              <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
            </div>
        </nav>
    </header>

<!--- HOME -->


<div id="home" class="offset">
    <div class="container home-bg p-0 m-0">
        <div class="row home-screen p-0 align-items-center">
            <div class="col-12">
                <div class="col-12">
                    <div class="home-caption p-0 d-flex justify-content-center">
                        <h1 class="caption-heading">Specjaliści w produkcji kaszy</h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="home-caption p-0 mb-10 d-flex justify-content-center">
                            <h3 class="second-heading">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi, consequuntur!</h3>
                    </div>
                </div>
                <div class="col-12 caption-button text-center">
                    <a href="#onas"><i class="fas fa-chevron-circle-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ABOUT -->

<div id="onas" class="offset">
   <div class="container content-container">
       <div class="row box align-self-center">
        <div class="heading col-12 text-center">
            <h1>
                Kilka słów o nas
            </h1>
        </div>
        <div class="row middle-box text-center">
            <div class="col-lg-5">
                <img src="./static/img/logo_2.jpg" alt="">
            </div>
            <div class="col-lg-7 align-self-center p-resp">
                <p>
                    Firma PPH "BOGDANO" powstała w 1995 roku. Wybudowana została w miejscowości Ołdrzychowo (woj. Kujawsko-pomorskie), gmina Janikowo,powiat Inowrocław. Właścicielem firmy od roku 1995 do listopada 2010 roku był Bogdan Morzydusza, później firma zmieniła formę na spółkę cywilną czyli PPH "BOGDANO"S.C z powodu rozwoju firmy .
                </p>
                <a href="#oferta"><button type="button" class="btn btn-light">Sprawdź ofertę</button></a> 
            </div>
        </div>
       </div>
   </div>
</div>  

<!-- OFERTA -->

<div id="oferta" class="offset">
    <div class="container offer-container">
        <div class="row">
            <div class="col-12 offer-heading text-center">
                <h1>
                    PRODUKTY
                </h1>
                <h3>
                    Kasza Jęczmienna
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 p-0 img-box">
                <div class="img-wrap">
                    <img src="./static/img/market.jpg" alt="">
                </div>
                <div class="details">
                    <h2>DROBNA</h2>
                </div>
            </div>
            <div class="col-lg-3 p-0 img-box">
                <div class="img-wrap">
                    <img src="./static/img/market.jpg" alt="">
                </div>
                <div class="details">
                    <h2>ŚREDNIA</h2>
                </div>
            </div>
            <div class="col-lg-3 p-0 img-box">
                <div class="img-wrap">
                    <img src="./static/img/market.jpg" alt="">
                </div>
                <div class="details">
                    <h2>GRUBA</h2>
                </div>
            </div>
            <div class="col-lg-3 p-0 img-box">
                <div class="img-wrap">
                    <img src="./static/img/market.jpg" alt="">
                </div>
                <div class="details">
                    <h2>PĘCZAK</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12 under-content">
                <p>
                    Produkty pakowane w big-bagi o pojemnosci 1t.
                </p>
                <a href="oferta.html"><button type="button" class="btn btn-light">Zobacz pełną ofertę</button></a>
            </div>
        </div>
    </div>
</div>

<hr>
<!-- KONTAKT -->

<div id="contact">
    <div class="container contact-container">
        <div class="row">
            <div class="col-12 text-center headings">
                <h1>Kontakt</h1>
                <h5>Zadzwoń, bądź wyslij nam wiadomość mailową</h5>
            </div>
        </div>

        <div class="row text-center contact-data">
            <div class="col-md-6 align-self-center">
                <div class="specifics">
                    <h5><i class="fas fa-building"></i>Przedsiębiorstwo Produkcyjno-Handlowe "Bogdano" S.C.</h5>
                    <h6>Tomasz Morzydusza Aneta Niedźwiedzka</h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="specifics">
                    <h5><i class="fas fa-map-marked-alt"></i>88-160 Janikowo, Ołdrzychwo 10A</h5>
                    <h5><i class="fas fa-phone-square"></i>725 198 946</h5>
                    <h5><i class="fas fa-phone-square"></i>726 070 881</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 contact-form">   
                <div class="text-succes"><?= $result; ?></div>          
                <!-------------- CONTACT FORM HEREEEEE--------------->
                <form method="post">
                    Imię:
                    <br>
                    <input type="text" class="size" name="name" size="40" required><br>
                    <br>
                    Twój adres e-mail:
                    <br>
                    <input type="email" class="size" name="email" size="40" required><br>
                    <br>
                    Treść:
                    <br>
                    <textarea rows="9" class="size" name="message" cols="40" required></textarea>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-light" name="sendmail">Wyślij wiadomość</button>
                </form>
                <!-------------- CONTACT FORM END more in contact-form.php-------->
            </div>
            <div class="col-xl-6 map">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=88-160%20Janikowo%2C%20O%C5%82drzychwo%2010A&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:center;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
            </div>
        </div>
    </div>
</div>

<!-- Footer  -->

    <div class="container footer">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="logo-footer">
                    <span>
                        <img src="./static/img/logo_2.jpg" alt="">
                    </span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 align-self-center">
                <div class="specifics">
                    <h5><i class="fas fa-building"></i>Przedsiębiorstwo Produkcyjno-Handlowe "Bogdano" S.C.</h5>
                    <h6>Tomasz Morzydusza Aneta Niedźwiedzka</h6>
                </div>
                <div class="specifics">
                    <h5><i class="fas fa-map-marked-alt"></i>88-160 Janikowo, Ołdrzychwo 10A</h5>
                </div>
                <div class="specifics phone">
                    <h5><i class="fas fa-phone-square"></i>725 198 946</h5>
                    <h5><i class="fas fa-phone-square"></i>726 070 881</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 text-center">
                <div class="social-footer">
                    <h5>Obserwuj nas w social media</h5>
                    <span class="text-center">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   
    <script>
        
    </script>
   
    <script>
       $(document).ready(function() {
           
			// grab the initial top offset of the navigation 
		   	var stickyNavTop = $('.navbar').offset().top;
		   	
		   	// our function that decides weather the navigation bar should have "fixed" css position or not.
		   	var stickyNav = function(){
			    var scrollTop = $(window).scrollTop(); // our current vertical position from the top
			         
			    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
			    // otherwise change it back to relative
			    if (scrollTop > 850) { 
			        $('.navbar').addClass('sticky');
			    } else {
			        $('.navbar').removeClass('sticky'); 
			    }
			};

			stickyNav();
			// and run it again every time you scroll
			$(window).scroll(function() {
				stickyNav();
			});
            
            $('.navbar-collapse a').click(function(){
            $(".navbar-collapse").collapse('hide');

            });
		});
  
    </script>
</body>
</html>