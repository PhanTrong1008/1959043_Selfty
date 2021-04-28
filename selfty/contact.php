<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="stylesheet" href="css/contact.css">
</head>

<body>
  <?php
  include 'includes/header.php';
  ?>
  <section class="contact my-4">
    <div class="container-fluid">


      <h1 class="my-4 text-center">Contact <span>Me</span> Now</h1>

      <div class="row contact-wrapper">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <form action="" name="contact-form" id="contact-form" method="POST">
            <ul>
              <li>
                <label for="contact-name">Name :</label>
                <div class="textarea">
                  <input type="text" name="contact-name" id="contact-name" value="" />
                </div>
              </li>

              <br />

              <li>
                <label for="contact-email">E-mail :</label>
                <div class="textarea">
                  <input type="email" name="contact-email" id="contact-email" value="" />
                </div>
              </li>

              <br />

              <li>
                <label for="contact-project">Message :</label>
                <div class="textarea">
                  <textarea name="contact-msg" id="contact-project" rows="6"></textarea>
                </div>
              </li>
            </ul>

            <div class="btn">
              <button type="submit" name="contact-submit" style="color: black; font-weight: 100">
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php
  include 'includes/footer.php';
  ?>

  <?php
  if (isset($_POST['contact-submit'])) {
    $email = $_POST['contact-email'];
    $name = $_POST['contact-name'];
    $msg = $_POST['contact-msg'];


    if (empty($name) || empty($email) || empty($msg)) {

  ?>

      <script type="text/javascript">
        swal({
          text: "Please fill in all the information",
          icon: "warning",
          button: "OK",
        });
      </script>

    <?php
    } elseif (!empty($name) && !empty($email) && !empty($msg)) {

    ?>

      <script type="text/javascript">
        swal({
          text: "Thank you for visiting me website, <?php echo $name ?>",
          icon: "success",
          button: "OK",
        });
      </script>

    <?php
    }
    ?>



  <?php
  }
  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>