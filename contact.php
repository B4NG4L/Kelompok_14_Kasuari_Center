
<?php 
include 'konek.php';
error_reporting(0);

    ?><!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Kasuari Center - Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Main -->
        <div id="main">
          <div class="inner">

            <!-- Header -->
            <header id="header">
              <div class="logo">
                <a href="index.php">Kasuari Center</a>
              </div>
            </header>

            <!-- Contact Form -->
            <section class="contact-form">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <form id="contact" action="" method="post">
                      <div class="row">
                        <div class="col-md-12">
                          <fieldset>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="button"><a href="mailto:awaludinharbelubun98@gmail.com">Send Message</button></a>
                          </fieldset>
                        </div>
                      </div>
                    </form> 
                  </div>

                </div>
              </div>
            </section>


          </div>
        </div>

      <!-- Sidebar -->
      <div id="sidebar">

        <div class="inner">
            
          <!-- Menu -->
     <nav id="menu">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li>
                  <span class="opener">Store</span>
                  <ul>
                    <?php 
                    
                    $sql="select * from toko order by toko desc";
                    $hasil=mysqli_query($kon,$sql);
                    while ($obt = mysqli_fetch_array($hasil)): ?>

                    <li><a href="store.php?tk=<?php echo $obt['kd'];?>"><?php echo $obt['toko'];?></a></li>

                  <?php  endwhile; ?>
                   
                  </ul>
                </li>
                <li>
                  <span class="opener">Sale</span>
                  <ul>
                    <li><a href="toko.php?tk=komputer">Computer</a></li>
                    <li><a href="toko.php?tk=laptop">Laptop</a></li>
                    <li><a href="toko.php?tk=printer">Printer</a></li>
                  </ul>
                </li>
              </ul>
            </nav>


          <!-- Footer -->
          <footer id="footer">
            <p class="copyright">Copyright &copy; 2019 Company Name
            <br>Designed by <a rel="nofollow" href="https://www.facebook.com/templatemo">Template Mo</a></p>
          </footer>

        </div>
      </div>

  </div>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/browser.min.js"></script>
  <script src="assets/js/breakpoints.min.js"></script>
  <script src="assets/js/transition.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/custom.js"></script>
</body>


</body>

</html>