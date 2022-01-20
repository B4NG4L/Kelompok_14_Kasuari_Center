<?php 
include 'konek.php';
error_reporting(0);
$g=$_GET['tk'];

    if ($g=='laptop' || $g=='komputer' || $g=='printer'){

    ?>
    <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Kasuari Center - <?php echo $g; ?></title>

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
            <header id="header">
              <div class="logo">
                <a href="index.php">Kasuari Center</a>
              </div>
            </header>

            <!-- Page Heading -->
            <div class="page-heading">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <h1>Sale <?php echo $g; ?></h1>
                  </div>
                </div>
              </div>
            </div>
             

<?php if ($g=='laptop') {
 $cm="select * from laptop where id='toho' order by brand desc";
$a=mysqli_query($kon,$cm);
$cm="select * from laptop where id='maha' order by brand desc";
$b=mysqli_query($kon,$cm);
$cm="select * from laptop where id='aora' order by brand desc";
$c=mysqli_query($kon,$cm);}
elseif ($g=='komputer') {
  $cm="select * from komputer where id='toho' order by brand desc";
$a=mysqli_query($kon,$cm);
$cm="select * from komputer where id='maha' order by brand desc";
$b=mysqli_query($kon,$cm);
$cm="select * from komputer where id='aora' order by brand desc";
$c=mysqli_query($kon,$cm);
 }
 elseif ($g=='printer') {
  $cm="select * from printer where id='toho' order by brand desc";
$a=mysqli_query($kon,$cm);
$cm="select * from printer where id='maha' order by brand desc";
$b=mysqli_query($kon,$cm);
$cm="select * from printer where id='aora' order by brand desc";
$c=mysqli_query($kon,$cm);
 }
 else { echo "GAADA ANJING !";}

                     ?>
            
     <!-- Toho Komputer -->
            <section class="tables">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>Toho Komputer</h2>
                    </div>
                    <div class="default-table">
                      <table>
                        <thead>
                          <tr>
                            <th>Brand</th>
                            <th>Specification</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                           
                            <?php while ($hok = mysqli_fetch_array($a)): ?>
                            <tr>
                              <td><?php echo $hok['brand'];?></td>
                            <td><?php echo $hok['specification'];?></td>
                            <td><?php echo $hok['price'];?></td>
                          </tr>
                          <?php endwhile; ?>
                        </tbody>
                      </table>
                      <a class="btn btn-primary" href="https://wa.me/+62 822-4835-1344/" role="button">Hubungi penjual</a>
                    </div>

                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>Mahadewa Komputer</h2>
                    </div>
                    <div class="default-table">
                      <table>
                        <thead>
                          <tr>
                            <th>Brand</th>
                            <th>Specification</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                            <?php while ($hok = mysqli_fetch_array($b)): ?>
                            <tr>
                              <td><?php echo $hok['brand'];?></td>
                            <td><?php echo $hok['specification'];?></td>
                            <td><?php echo $hok['price'];?></td>
                          </tr>
                          <?php endwhile; ?>
                        </tbody>
                      </table>
                      <a class="btn btn-primary" href="https://wa.me/+62 812-1271-8779/" role="button">Hubungi penjual</a>
                    </div>

                  </div>
                </div>
              </div>

            <!-- Master Komputer -->
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>Aora Computer</h2>
                    </div>
                    <div class="default-table">
                      <table>
                        <thead>
                          <tr>
                            <th>Brand</th>
                            <th>Specification</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                       <?php while ($hok = mysqli_fetch_array($c)): ?>
                            <tr>
                              <td><?php echo $hok['brand'];?></td>
                            <td><?php echo $hok['specification'];?></td>
                            <td><?php echo $hok['price'];?></td>
                          </tr>
                          <?php endwhile; ?>
                        </tbody>
                      </table>
                      <a class="btn btn-primary" href="https://wa.me/+62 822-4835-1344/" role="button">Hubungi penjual</a>
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
<?php } else {
header('index.php');
}?>