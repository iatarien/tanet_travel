<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Tanet Voyages</title>
  <?php require("header-links.php"); ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#intro">The<span>Event</span></a></h1>-->
        <a href="fr.php" class="scrollto" style="font-weight: bold; font-size: 27px; font-family:  'Raleway', sans-serif;">TANET <span style="color: white;">VOYAGES</span></a>
        <!--- <img src="assets/img/logo.png" alt="" title=""> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Accueil</a></li>
          <li><a href="#about">A propos</a></li>
          <li><a href="#buy-tickets">Déstinations</a></li>
          <li><a href="#venue">Galerie</a></li>

          <li><a href="#contact">Contactez-Nous</span></a></li>
          <li class="buy-tickets"><a href="index.php"> <img style="width: 20px; height: auto;" src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png"> &emsp;EN</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0"><span>Tanet Voyages</span><br>Agence de voyage algérienne, créant des sensations partout dans le monde.</h1>
      <a href="https://www.youtube.com/watch?v=s2nIRUE4BjI&feature=youtu.be" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
    </div>
  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12">
            <h2 style="text-align: center;" >A Propos</h2>
            <p style="text-align: justify;">&emsp;&emsp;&emsp;L'agence de voyage Tanet est basée en Algérie. Elle a été créé par Khirani Abdelmalek, qui travaille dans le secteur de l'hôtellerie / du tourisme depuis 2004. Étant le fils du créateur de la première agence de voyage du sud algérien, Abdelmalek Khirani a débuté sa carrière très jeune. Il est maintenant un expert en planification de voyages, offrant des services de la meilleure qualité et forgeant des souvenirs inoubliables pour ses clients.</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->


    <!-- ======= Buy Ticket Section ======= -->
    <section id="buy-tickets" class="section-with-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Déstinations</h2>
          <p></p>
        </div>

        <?php require("destinations.php"); ?>s

      </div>

      <?php require("modals.php"); ?>

    </section><!-- End Buy Ticket Section -->
    

    <!-- ======= Venue Section ======= -->
    <section id="venue">

      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Galerie</h2>
          <p>Des images du desert Algerien.</p>
        </div>

      </div>

      <?php require ("gallery-images.php"); ?> 

    </section><!-- End Venue Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contactez Nous</h2>

        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Adresse</h3>
              <address>Avenue Laarbi Ben Mhidi, Ouargla, Algerie</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telephone</h3>
              <p><a href="tel:+213660604879">+213 660 60 48 79 / +213 664 80 10 43</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:tanet.voyage@gmail.com">tanet.voyage@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

    <section id="carte">

      <div class="container" data-aos="fade-up">
        <div class="row no-gutters">
          <div class="col-lg-12 carte-map" >
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d846.3907154721646!2d5.3197053292384044!3d31.945623536822282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x125d6b430740a925%3A0xef83a121552e69fb!2sTanet%20Voyages!5e0!3m2!1sfr!2sdz!4v1601563505827!5m2!1sfr!2sdz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>

        </div>

      </div>

    </section><!-- End Venue Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
            <a href="#footer" class="scrollto" style="font-weight: bold; font-size: 27px; font-family:  'Raleway', sans-serif;">TANET <span style="color: white;">VOYAGES</span></a>
            <br><br>
            <p style="text-align: justify; font-size: 15px;">Vous pouvez nous contacter par e-mail, appelez-nous sur notre numéro de téléphone et nous répondrons à toutes vos questions et vous donnerons toutes les informations dont vous avez besoin. Vous pouvez également nous rendre visite dans notre agence où vous serez accueillis et informés de toutes nos offres et services.</p>
          </div>



          <div class="col-lg-6 col-md-6 footer-contact">
            <h4>Contactez Nous</h4>
            <p>
              Avenue Laarbi Ben Mhidi<br>
              Ouargla<br>
              Algerie <br>
              <strong>Phone:</strong> +213 660 60 48 79 / +213 664 80 10 43<br>
              <strong>Email:</strong> tanet.voyage@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://www.facebook.com/tanetvoyages/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/tanet.travel/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Tanet Voyages</strong>. All Rights Reserved
      </div>
      <div class="credits" style="visibility: hidden;">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->
  <a id="Da_link" style="display: none;" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <?php require('scripts.php'); ?>

</body>

</html>