<!doctype html>
<html lang="en">
  <head>
    <title>Создание веб-сайтов под ключ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">		
		
    <!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="shortcut icon" href="/imgs/fav.png" type="image/png">   
    <link href="../style.css" rel="stylesheet">

  </head>

  <body>	    
    <!-- Модальное окно десктоп -->
    <?php require 'modal-form-desk.php'; ?> 

    <!-- Модальное окно мобайл -->
    <?php require 'modal-form-mob.php'; ?>

    <div id="particles-js">
      <!-- Desktop -->
      <div id="navbar" class="container-fluid sticky-top header d-none d-lg-block">
        <nav class="row">
            <div class="col-auto d-flex align-items-center">
              <div class="logo d-flex align-items-center">
                <a class="logo-img" href="/"><img src="/imgs/logo-fox.png" height="24" alt=""></a>
                <div class="logo-text">SMART FOX</div>
              </div>
            </div>
            <ul class="col d-flex align-items-center list-unstyled list-inline">
              <li class="list-inline-item"><a href="/#why-uber-section" id="why-uber-link">Почему мы</a></li>
              <li class="list-inline-item"><a href="/#req-drivers-section" id="req-drivers-link">Наши работы</a></li>
              <li class="list-inline-item"><a href="/#req-auto-section" id="req-auto-link">Цены</a></li>
              <li class="list-inline-item"><a href="/#our-commission-section" id="our-commission-link">Связаться с нами</a></li>
            </ul>
            <div class="col-auto d-flex align-items-center justify-content-end contacts">           
              <img class="phone-icon" src="imgs/phone.svg" width="17" height="17" alt="">
              <div class="phone-digits">+380 99 290 00 50</div>
              <img class="whatsapp-icon" src="imgs/whatsapp.svg" width="18" height="18" alt="">
              <img class="viber-icon" src="imgs/viber.png" width="16" height="18" alt="">
              <img src="imgs/telegram.png" width="18" height="18" alt="">           
            </div>
        </nav>
      </div> 
      <!-- Mobile-logo -->
      <div class="col-auto d-flex align-items-center d-lg-none logo-wrap-mob">
        <div class="logo d-flex align-items-center">
          <a class="logo-img" href="/"><img src="/imgs/logo-fox.png" height="24" alt=""></a>
          <div class="logo-text">SMART FOX</div>
        </div>
      </div>
      <!-- И мобайл, и Десктоп -->
      <div class="container-fluid headers-wrap">
        <div class="row">
          <div class="col-12 text-center headers">
            <h1>Создаём веб-сайты "под ключ"</h1>
            <h2>От простого сайта-визитки до высоконагруженного веб-приложения</h2>
            <br class="d-none d-lg-block">
            <br>
          </div>
        </div>   
        <div class="row text-center">
          <div class="col col-lg-12 ml-auto mr-auto">
            <button id="btn-fit" type="submit" class="btn btn-primary d-none d-lg-block ml-auto mr-auto">Получить консультацию</button>
            <button id="btn-fit-mob" type="submit" class="btn btn-primary d-lg-none ml-auto mr-auto">Оставить заявку</button>
          </div>  
        </div>     
      </div>  

      <!-- Mobile -->
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
        <nav id="navbar-mob" class="navbar navbar-dark no-gutters">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="col d-flex align-items-center justify-content-end contacts">            
              <span class="phone-digits">+380 99 290 00 50</span>
          </div>
          <img class="whatsapp-icon" src="imgs/whatsapp.svg" width="14" height="14" alt="">
          <img class="viber-icon" src="imgs/viber.png" width="12" height="14" alt="">
          <img src="imgs/telegram.png" width="14" height="14" alt="">       
        </nav>       
      </div> 
    </div>

