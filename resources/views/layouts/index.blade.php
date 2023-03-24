<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DevAgostini</title>

  <link href="/assets/img/favicon.ico" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">DevAgostini</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="navegacao nav-link scrollto active" href="/">Home</a></li>
          <li><a class="navegacao nav-link scrollto" href="/sobre">Sobre</a></li>
          <li><a class="navegacao nav-link scrollto" href="/certificados">Certificados</a></li>
          <li><a class="navegacao nav-link scrollto" href="/contato">Contato</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.gif)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
         </div>
      </div>
    </div>
  </div>

  <main id="main">
  @yield('content')
  </main>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>DevAgostini</strong>. All Rights Reserved</p>
            <div class="credits">
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/typed.js/typed.min.js"></script>

  <script src="/assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script>
    $(document).ready(function(){
      var url = window.location.pathname

      var links = $('.navegacao')

      links.map(function(){
        var item = $(this).attr('href')
        $(this).removeClass('active')
        if(url == item)
          $(this).addClass('active')
      })
    })
  </script>

</body>

</html>