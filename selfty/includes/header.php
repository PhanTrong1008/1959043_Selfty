<?php
  // var_dump(basename($_SERVER['SCRIPT_NAME'], ".php"));
  $currentPage = basename($_SERVER['SCRIPT_NAME'], ".php");
  $navLinks = ['home', 'gallery', 'projects', 'contact'];

  function outputNav($navLinks, $currentPage) {
    $theClass = '';
    foreach ($navLinks as $link) {
        if ($link == "home" && $currentPage == "index") {
            $theClass = 'clicked';
        } elseif ($link == $currentPage){
          $theClass = 'clicked';
        } else {
          $theClass = '';
        }

        // var_dump("<li><a href='{$link}.php' class='{$theClass}'>" . ucfirst($link) . "</a></li>");
        if ($link == "home") {
            echo "<li><a href='index.php' class='{$theClass}'>" . ucfirst($link) . "</a></li>";
        } else {
            echo "<li><a href='{$link}.php' class='{$theClass}'>" . ucfirst($link) . "</a></li>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&family=Merriweather&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <scrip
      src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    ></scrip>
    <scrip
      src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
    ></scrip>
    <link rel="stylesheet" href="css/style.css?=<?php echo time(); ?>">
    <title>Trong's Home Page</title>
  </head>
  <body>
    <!-- Header -->
    
    <!-- End Header -->

    <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>T</span>rong <span>P</span>han</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <?php
              outputNav($navLinks, $currentPage);
            ?>
          </ul>
        </div>
      </div>
    </div>
  </section>



  <script src="main.js"></script>
  </body>
</html>
