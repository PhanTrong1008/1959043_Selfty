<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/abouMeStyle.css">
  <title>My Website</title>
</head>
<body>

    <?php
      include 'includes/header.php';
    ?>
    <!-- About Section -->
    
  <!-- <section id="about">
    <h1 class="section-title">About <span>me</span></h1>
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
  </section> -->
  <!-- End About Section -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Project 1</h1>
            <h2>Android Project</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="https://miro.medium.com/max/1200/0*We8fs60pAtdIocO5.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 2</h1>
            <h2>Database Design</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="https://blog.timescale.com/content/images/2019/02/_IoT---Relational-Database.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 3</h1>
            <h2>Design web layout</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="https://pocketnow.com/files/2017/01/PN-Complete-Web-Programming.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 4</h1>
            <h2>Coding is Love</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="./images/img-1.png" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>info</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="./images/phone-call.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>0934128854 (Home)</h2>
            <h2>0934128854 (Work)</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="./images/email.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>phanductrong1008@gmail.com</h2>
            <h2>1959043@itec.hcmus.edu.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="./images/address.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Hung Vuong street, District 10, TPHCM, Viet Nam</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <?php
      include 'includes/footer.php';
    ?>
</body>
</html>