<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--css-->
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH_STATIC ?>public/css/home/home.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">

  <!--font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  
  <title>Home Page</title>
</head>
<body>

  <?php include('header.php'); ?>

  <section class='hero'>
  <div class="custom-shape-divider-bottom-1618340795">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
  </div>

    <div class="content">
      <div class="text">
        <h1>Modern Title Example</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet ante vitae sapien porta dignissim. Phasellus mattis purus ac massa bibendum consequat. </p>
      </div><!--text-->

      <div class="icons">
        <a href="#"><img src="<?php echo INCLUDE_PATH_STATIC ?>public/images/home/fb.svg" alt="fb"></a>
        <a href="#"><img src="<?php echo INCLUDE_PATH_STATIC ?>public/images/home/instagram.svg" alt="insta"></a>
        <a href="#"><img src="<?php echo INCLUDE_PATH_STATIC ?>public/images/home/wpp.svg" alt="wpp"></a>
      </div><!--icons-->
    </div><!--content-->
  </section>


  <section class='button-section'>
    <div class="content">

      <a class='button' href="#"><div class="button-el"><h2>Try now</h2></div></a>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet ante vitae sapien porta dignissim. 
      </p>

    </div><!--content-->
  </section>


  <section class='card-section'>
    <h1>Services</h1>

    <div class="cards">
      <div class="card">
        <h3>Service 1</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div><!--card1-->

      <div class="card">
        <h3>Service 2</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div><!--card2-->

      <div class="card">
        <h3>Service 3</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div><!--card3-->

      <div class="card">
        <h3>Service 4</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div><!--card4-->

      <div class="card">
        <h3>Service 5</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div><!--card5-->

      <div class="card">
        <h3>Service 6</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div><!--card6-->
    </div><!--cards-->
  </section>


  <section class='costumers-section'>
    <div class="content">
      <span>more than <br><b>100</b><br> satisfied customers</span>
    </div><!--content-->
  </section>


  <section class='phrase-section'>
    <div class="dividertop">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
    </div>
    <h1>Lorem ipsum dolor sit amet.</h1>
    <div class="dividerbottom"> 
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
  </div>
  </section>

  
  <section class="testimonials">
    <h1>Testimonials</h1>

    <div class="slider">
      <a class='arrow' id='left' href="#"><i class="fas fa-angle-left"></i></a>

      <div class="cards">
        <div class="card">
          <img src="<?php echo INCLUDE_PATH_STATIC ?>public/images/home/photo1.jpg" alt="photo">

          <p>
          CARD 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet ante vitae sapien porta dignissim. 
          </p>
        </div><!--card-->

        <div class="card">
          <img src="<?php echo INCLUDE_PATH_STATIC ?>public/images/home/photo1.jpg" alt="photo">

          <p>
          CARD 2 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet ante vitae sapien porta dignissim. 
          </p>
        </div><!--card-->
        <div class="card">
          <img src="<?php echo INCLUDE_PATH_STATIC ?>public/images/home/photo1.jpg" alt="photo">

          <p>
          CARD 3 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet ante vitae sapien porta dignissim. 
          </p>
        </div><!--card-->
      </div>
      <a class='arrow' id='right' href="#"><i class="fas fa-angle-right"></i></a>
    </div><!--slider-->
  </section>


  <?php include("footer.php"); ?>

  <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
  <script src="<?php echo INCLUDE_PATH_STATIC ?>public/js/slider.js"></script>
  <script src="https://kit.fontawesome.com/560a2dac7b.js" crossorigin="anonymous"></script>
</body>
</html>