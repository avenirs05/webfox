<!doctype html>
<html lang="en">
  <head>
    <title>Подключение к UBER</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">		
		
    <!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="shortcut icon" href="/imgs/fav.png" type="image/png">   
    <link href="../style.css" rel="stylesheet">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter46649418 = new Ya.Metrika({
                        id:46649418,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/46649418" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
  </head>

  <body>	    
    <!-- Модальное окно десктоп -->
    <?php require 'modal-form-desk.php'; ?> 

    <!-- Модальное окно мобайл -->
    <?php require 'modal-form-mob.php'; ?>

    <div class="container-fluid sticky-top header d-none d-lg-block">
      <nav class="row navbar">
          <div class="col-auto d-flex align-items-center">
            <a href="/"><img src="/imgs/logo.png" height="40" alt=""></a>
          </div>
          <ul class="col d-flex align-items-center list-unstyled list-inline">
            <li class="list-inline-item"><a href="/#why-uber-section" id="why-uber-link">Почему UBER</a></li>
            <li class="list-inline-item"><a href="/#req-drivers-section" id="req-drivers-link">Требования к водителям</a></li>
            <li class="list-inline-item"><a href="/#req-auto-section" id="req-auto-link">Tребования к авто</a></li>
            <li class="list-inline-item"><a href="/#our-commission-section" id="our-commission-link">Наша комиссия</a></li>
            <li class="list-inline-item"><a href="/#change-partner-section" id="change-partner-link">Сменить партнера</a></li> 
          </ul>
          <div class="col-auto d-flex align-items-center justify-content-end contacts">           
            <img class="phone-icon" src="imgs/phone.svg" width="17" height="17" alt="">
            <div class="phone-digits">+380 99 291 89 60</div>
            <img class="whatsapp-icon" src="imgs/whatsapp.svg" width="18" height="18" alt="">
            <img class="viber-icon" src="imgs/viber.png" width="16" height="18" alt="">
            <img src="imgs/telegram.png" width="18" height="18" alt="">           
          </div>
      </nav>
    </div>

  	<!-- Navbar for mobile -->
    <div id="header-mob" class="pos-f-t sticky-top header d-lg-none">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
        	<ul class="col list-unstyled">
        		<li><a href="#why-uber-section" id="why-uber-link-mob">Почему UBER</a></li><br>
        		<li><a href="#req-drivers-section" id="req-drivers-link-mob">Требования к водителям</a></li><br>
        		<li><a href="#req-auto-section" id="req-auto-link-mob">Tребования к авто</a></li><br>
        		<li><a href="#our-commission-section" id="our-commission-link-mob">Наша комиссия</a></li><br>
        		<li><a href="#change-partner-section" id="change-partner-link-mob">Сменить партнера</a></li>	
        	</ul>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark no-gutters">
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
        <div class="col d-flex align-items-center justify-content-end contacts">				  	
      			<span class="phone-digits">+380 99 291 89 60</span>
      	</div>
    		<img class="whatsapp-icon" src="imgs/whatsapp.svg" width="14" height="14" alt="">
    		<img class="viber-icon" src="imgs/viber.png" width="12" height="14" alt="">
    		<img src="imgs/telegram.png" width="14" height="14" alt="">				
      </nav>       
    </div>