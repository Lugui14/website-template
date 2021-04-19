<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>

  <!--css-->
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH_STATIC ?>public/css/about/about.css">

  <!--font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

</head>
<body>

  <?php include("header.php"); ?>

  <section class="hero">

  <div class="custom-shape-divider-bottom-1618340795">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
  </div>
  
    <div class="content">
    
      <div class="text">
        <h1>We are 'COMPANY EXAMPLE'</h1>
      </div>

      <a href="#redirect">
        <div class="button">
          <i class="fas fa-arrow-down"></i>
        </div>
      </a>

    </div>

  </section>

  <section id='redirect' class="textexample">
    <div class="content">
    
    <p><b>Text example:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu rutrum felis, non tincidunt tortor. Quisque venenatis dolor neque, eu maximus erat luctus id. Curabitur tortor magna, aliquet nec turpis eu, tincidunt rutrum augue. </p>

    <img class='placeholder' src="<?php echo INCLUDE_PATH_STATIC ?>public/images/about/placeholdersvg.svg" alt="svg">

    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu rutrum felis, non tincidunt tortor.
    </p>

    <div class="cards">
    
      <div class="card">
        
        <img src="<?php echo INCLUDE_PATH_STATIC ?>public/images/about/female.svg" alt="female">

        <div class="text">
        <b>Name</b>
        <span>Profession</span>
        </div>
      </div>

      <div class="card">
        
        <img src="<?php echo INCLUDE_PATH_STATIC ?>public/images/about/female.svg" alt="female">

        <div class="text">
        <b>Name</b>
        <span>Profession</span>
        </div>
      </div>

      <div class="card">
        
        <img src="<?php echo INCLUDE_PATH_STATIC ?>public/images/about/male.svg" alt="male">

        <div class="text">
        <b>Name</b>
        <span>Profession</span>
        </div>
      </div>

      <div class="card">
        
        <img src="<?php echo INCLUDE_PATH_STATIC ?>public/images/about/male.svg" alt="male">

        <div class="text">
        <b>Name</b>
        <span>Profession</span>
        </div>
      </div>

      <div class="card">
        
        <img src="<?php echo INCLUDE_PATH_STATIC ?>public/images/about/female.svg" alt="female">

        <div class="text">
        <b>Name</b>
        <span>Profession</span>
        </div>
      </div>

      <div class="card">
        
        <img src="<?php echo INCLUDE_PATH_STATIC ?>public/images/about/male.svg" alt="male">

        <div class="text">
        <b>Name</b>
        <span>Profession</span>
        </div>
      </div>

    </div>
    </div>
  </section>

  <?php include("footer.php"); ?>


  <script src="https://kit.fontawesome.com/560a2dac7b.js" crossorigin="anonymous"></script>
</body>
</html>