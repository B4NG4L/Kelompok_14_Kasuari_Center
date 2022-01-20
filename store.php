<?php 
include 'konek.php';
error_reporting(0);
$g=$_GET['tk'];

    if ($g=='th' || $g=='maha' || $g=='aora'){

    ?>
<!DOCTYPE html>
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
                <a href="index.html">Kasuari Center</a>
              </div>
            </header>

            <!-- Contact Form -->
            <section class="contact-form">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card" style="width: 15rem;">
                        <img src="assets/images/toho.jpg" class="card-img-top" alt="Toho Komputer">
                        <div class="card-body">

                    <?php 
                    if ($g=='th') 
                      { 
                        $cm="select * from toko where kd='th'";
$a=mysqli_query($kon,$cm);

 }
elseif ($g=='maha') {
   $cm="select * from toko where kd='maha'";
$a=mysqli_query($kon,$cm);

 }
 elseif ($g=='aora') {
   $cm="select * from toko where kd='aora' ";
$a=mysqli_query($kon,$cm);

 }
 else { echo "GAADA ANJING !";}

                     ?>
                     <?php while ($obt = mysqli_fetch_array($a)): ?>
                          <h5 class="card-title"><?php echo $obt['toko'];?></h5>
                        </div>
                        <ul class="list-group list-group-flush" style="margin-bottom: 20px;"> 
                          <li class="list-group-item"><?php echo $obt['alamat'];?></li>
                          <li class="list-group-item"><?php echo $obt['telpon'];?></li>
                          <li class="list-group-item"><?php echo $obt['provinsi'];?></li>
                        </ul>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div id="map">
                  
                    <iframe src="<?php echo $obt['maps'];?>" width="350" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <?php endwhile; ?>
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

</html><?php } else {
header('index.php');
}?>