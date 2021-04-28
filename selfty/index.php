<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Merriweather&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <scrip src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scrip>
  <scrip src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></scrip>
  <link rel="stylesheet" href="css/style.css?=<?php echo time(); ?>">

  <title>Trong's Home Page</title>

</head>

<body>
  <!-- Header -->
  <?php
  include 'includes/header.php';
  ?>
  <!-- End Header -->

  <!-- Banner -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>My Name is <span></span></h1>
        <h1>Trọng <span></span></h1>
      </div>
    </div>
  </section>
  <!-- End Banner -->

  <!-- <div id="main-col">
    <div class="content">

      <div class="col-3">
        <h2>My Photos</h2>
        <hr />
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, quam
          aspernatur esse quaerat eius vitae eos veritatis ipsam beatae iusto,
          doloriobus asperiores ea mollitia consequatur dolorem tempora id
          laudantium itaque!
        </p>
        <div class="btn">
          <button type="button"><a href="./gallery.php">See more</a></button>
        </div>
      </div>

      <div class="col-3">
        <h2>Resume</h2>
        <hr />
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, quam
          aspernatur esse quaerat eius vitae eos veritatis ipsam beatae iusto,
          doloribus asperiores ea mollitia consequatur dolorem tempora id
          laudantium itaque!
        </p>
        <div class="btn">
          <button type="button"><a href="./aboutMe.php">See more</a></button>
        </div>
      </div>
    </div>
  </div> -->


  <!-- About Section -->
    
  <section id="about">
    <h1 class="section-title text-center mb-0">About <span>me</span></h1>
    <div class="about container">
        
      <div class="col-left">
        <div class="about-img">
          <img src="./images/birthday.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        
        <h2>Front End Developer</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni! Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt reprehenderit libero enim!</p>
      </div>
    </div>
  </section>
  <!-- End About Section -->


  <!-- Footer Section -->
  <?php
  include 'includes/footer.php';
  ?>
  <!-- End Footer Section -->

</body>

</html>