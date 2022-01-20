<?php 
include 'konek.php';
error_reporting(0);

    ?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Kasuari Center - Home</title>

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

            <!-- Banner -->
            <section class="main-banner">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="banner-content">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="banner-caption">
                            <h4>Hallo, selamat datang di <em>KASUARI CENTER</em></h4>
                            <p>Selamat Datang Di <strong>Kasuari Center!</strong> Solusi mencari lokasi <strong>Toko komputer Dan Service center</strong>, di sorong dan sekitarnya.</p>
                          </div>
                        </div>
                      </div>
                    </div>
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
