<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>savan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">  
  <link href="/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
</head>
<body>
  <header id="header" class=" d-flex align-items-center">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class=""><a href="index.html">SAVAN BIBLIOTHEQUE</a></h1>
         
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
              <li><a class="nav-link scrollto" href="">Nos ouvrages</a></li>
              <li><a class="nav-link scrollto " href="{{Route('form')}}">enregistrer un document</a></li>
              <li><a class="nav-link scrollto" href="">Archives</a></li>   
              <li><a class="nav-link scrollto" href="{{Route('login')}}">Se deconnecter</a></li>
              <li class="dropdown"><a href="BizPage/connexion.html"><span> </span> </a>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
        </div>
      </div>

    </div>
  </header><!-- End Header -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(/images/capture9.JPG)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown"> VOTRE ENCYCLOPEDIE</h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp"></a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(/images/capture7.JPG)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">LITTERATURE</h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp"></a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(/images/capture6.JPG)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">ECONOMIE</h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp"></a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(/images/capture5.JPG)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">PHYLOSOPIE</h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp"></a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(/images/capture1.JPG)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">DEVELOPPEMENT PERSONNEL</h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp"></a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->
  <section class="d-flex flex-column" id="think">
  <div id="page-content">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <h1 class="font-weight-light mt-4 text-black">Pensée du jour</h1>
          <p class="lead text-black-100">  <marquee behavior="" direction=""  width="600"  bg-color="orange">Cherche pas à être parfait, cherche à être heureux </p> </marquee>  <br><h4>Youssoupha</h4><br></p>
        </div>
      </div>
    </div>
  </div>
  </section>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy;SAVAN BIBLIOTHEQUE</small>
    </div>
  </footer>
  </body>
  </html>