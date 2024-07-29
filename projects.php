<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ANALISIS KINERJA SANIMAS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/GI-1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.1.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo GI.png" alt="">
        <h1>GEOSPATIAL INFORMATION TECHNOLOGY<span></span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="projects.php" class="active">Analytics</a></li>
          <li><a href="about.php">Maps</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="about1.php">About</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/poto2.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Analytics</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Analytics</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Projects Section ======= -->

    <head>
      <title><?php echo $title ?></title>
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
      <html>
    </head>

    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Ranking</th>
                  <th>Nama KSM/KPP</th>
                  <th>Kecamatan</th>
                  <th>Tahun dibangun</th>
                  <th>Luas lahan (m²)</th>
                  <th>Luas bangunan (m²)</th>
                  <th>Status lahan</th>
                  <th>Jenis pendanaan</th>
                  <th>Jenis sistem IPAL</th>
                  <th>Sumber air</th>
                  <th>Pemeliharaan sistem jaringan</th>
                  <th>Indeks Kinerja Gabungan</th>
                  </p>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php
                $mysqli = new mysqli("localhost", "root", "", "basis_data_sanimas");

                if ($mysqli->connect_error) {
                  die("Connection failed: " . $mysqli->connect_error);
                }

                $no = 0;
                $result = $mysqli->query("SELECT * FROM tbl_sanimas");

                if ($result) {
                  while ($data = $result->fetch_assoc()) {
                    $no++;
                    // Memasukkan data ke dalam baris tabel
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data['NAMA KSM/KPP'] . "</td>";
                    echo "<td>" . $data['KECAMATAN'] . "</td>";
                    echo "<td>" . $data['Tahun Dibangun'] . "</td>";
                    echo "<td>" . $data['LUAS LAHAN (M2)'] . "</td>";
                    echo "<td>" . $data['LUAS BANGUNAN (M2)'] . "</td>";
                    echo "<td>" . $data['STATUS LAHAN'] . "</td>";
                    echo "<td>" . $data['JENIS PENDANAAN'] . "</td>";
                    echo "<td>" . $data['JENIS SISTEM IPAL'] . "</td>";
                    echo "<td>" . $data['SUMBER AIR'] . "</td>";
                    echo "<td>" . $data['PEMELIHARAAN SISTEM JARINGAN'] . "</td>";
                    echo "<td>" . $data['Indeks Kinerja Gabungan'] . "</td>";
                    echo "</tr>";
                  }

                  $result->free();
                } else {
                  echo "Query failed: " . $mysqli->error;
                }

                $mysqli->close();
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          $('#table_id').DataTable();
        });
      </script>
    </body>

</html>

<!--pengunaan lahan 2000-->
<!-- 
          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/DIAGRAM PL TAHUN 2000.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>DIAGRAM PENGUNAAN LAHAN</h4>
                  <p>DIAGRAM PENGUNAAN LAHAN TAHUN 2000</p>
                  <a href="assets/img/projects/DIAGRAM PL TAHUN 2000.jpg" title="pengunaan lahan 2000" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div> -->
<!--end pengunaan lahan 2000-->

<!--pengunaan lahan 2009-->
<!-- <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/DIAGRAM PL TAHUN 2009.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>DIAGRAM PENGUNAAN LAHAN</h4>
                  <p>DIAGRAM PENGUNAAN LAHAN TAHUN 2021</p>
                  <a href="assets/img/projects/DIAGRAM PL TAHUN 2009.jpg" title="pengunaan lahan 2009" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div> -->
<!--end pengunaan lahan 2009-->

<!--end pengunaan lahan 2021-->
<!-- <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/DIAGRAM PL TAHUN 2021.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>DIAGRAM PENGUNAAN LAHAN</h4>
                  <p>DIAGRAM PENGUNAAN LAHAN TAHUN 2021</p>
                  <a href="assets/img/projects/DIAGRAM PL TAHUN 2021.jpg" title="pengunaan lahan 2021" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div> -->
<!--end pengunaan lahan 20021-->

<!--land surface temprature 2000-->
<!-- <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/layout lst 2000.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>LANDSURFACE TEMPRATURE</h4>
                  <p>LAND SURFACE TEMPRATURE TAHUN 2000 KOTA BOGOR</p>
                  <a href="assets/img/projects/layout lst 2000.png" title="LANDSURFACE TEMPRATURE" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div> -->
<!--end land surface temprature 2000-->

<!--land surface temprature 2009-->
<!-- <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/layout lst 2009.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>LANDSURFACE TEMPRATURE</h4>
                  <p>LAND SURFACE TEMPRATURE TAHUN 2009 KOTA BOGOR</p>
                  <a href="assets/img/projects/layout lst 2009.png" title="LANDSURFACE TEMPRATURE" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div> -->
<!--end land surface temprature 2009-->


<!--land surface temprature 2021-->
<!-- <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/layout lst 2021 2.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>LANDSURFACE TEMPRATURE</h4>
                  <p>LAND SURFACE TEMPRATURE TAHUN 2021 KOTA BOGOR</p>
                  <a href="assets/img/projects/layout lst 2021 2.png" title="LANDSURFACE TEMPRATURE" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div> -->
<!-- end land surface temprature 2021 -->

<!-- diagram pl 2000 -->
<!-- 
            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/DIAGRAM PL TAHUN 2000.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>DIAGRAM PENGUNAAN LAHAN</h4>
                  <p>DIAGRAM PENGUNAAN LAHAN TAHUN 2000</p>
                  <a href="assets/img/projects/DIAGRAM PL TAHUN 2000.jpg" title="Diagram Pengunaan lahan tahun2000" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div> -->

<!-- End diagram pl 2009 -->

<!-- diagram pl 2000 -->
<!-- 
             <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/DIAGRAM PL TAHUN 2009.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>DIAGRAM PENGUNAAN LAHAN</h4>
                  <p>DIAGRAM PENGUNAAN LAHAN TAHUN 2009</p>
                  <a href="assets/img/projects/DIAGRAM PL TAHUN 2009.jpg" title="Diagram Pengunaan lahan tahun2009" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
             -->
<!-- End diagram pl 2009 -->

<!-- diagram pl 2021 -->
<!-- 
             <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/DIAGRAM PL TAHUN 2021.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>DIAGRAM PENGUNAAN LAHAN</h4>
                  <p>DIAGRAM PENGUNAAN LAHAN TAHUN 2021</p>
                  <a href="assets/img/projects/DIAGRAM PL TAHUN 2021.jpg" title="Diagram Pengunaan lahan tahun2021" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
             -->
<!-- End diagram pl 2021 -->


<!-- diagram LANDSURFACE TEMPRATURE 2000 -->
<!-- 
             <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/DIAGRAM LST TAHUN 2000.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>DIAGRAM LAND SURFACE TEMPRATURE</h4>
                  <p>DIAGRAM LANDSURFACE TEMPRATURE 2000</p>
                  <a href="assets/img/projects/DIAGRAM LST TAHUN 2000.jpg" title="LANDSURFACE TEMPRATURE 2000" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div> -->

<!-- End LANDSURFACE TEMPRATURE 2000 -->


<!-- diagram LANDSURFACE TEMPRATURE 2009 -->
<!-- 
             <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/DIAGRAM LST TAHUN 2009.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>DIAGRAM LAND SURFACE TEMPRATURE</h4>
                  <p>DIAGRAM LANDSURFACE TEMPRATURE 2009</p>
                  <a href="assets/img/projects/DIAGRAM LST TAHUN 2009.jpg" title="LANDSURFACE TEMPRATURE 2009" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
             -->
<!-- End LANDSURFACE TEMPRATURE 2009 -->

<!-- diagram LANDSURFACE TEMPRATURE 2021 -->
<!-- 
             <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/DIAGRAM LST TAHUN 20021.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>DIAGRAM LAND SURFACE TEMPRATURE</h4>
                  <p>DIAGRAM LANDSURFACE TEMPRATURE 2021</p>
                  <a href="assets/img/projects/DIAGRAM LST TAHUN 20021.jpg" title="LANDSURFACE TEMPRATURE 2021" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div> -->

<!-- End LANDSURFACE TEMPRATURE 2000 -->





<!-- 
            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/repairs-3.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>  -->

<!-- End Projects Item -->
<!-- 
            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/design-3.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div> -->

<!-- End Projects Item -->

<!-- </div> -->
<!-- End Projects Container -->

<!-- </div> -->

<!-- </div>
    </section> -->
<!-- End Our Projects Section -->

<!-- </main> -->
<!-- End #main -->

<!-- ======= Footer ======= -->
<!-- <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>UpConstruction</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div> -->
<!-- End footer info column-->
<!-- 
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>
           -->
<!-- End footer links column-->
<!-- 
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>
            </ul>
          </div>
           -->
<!-- End footer links column-->
<!-- 
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href="#">Molestiae accusamus iure</a></li>
              <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>
            </ul>
          </div> -->

<!-- End footer links column-->
<!-- 
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href="#">Ipsam</a></li>
              <li><a href="#">Laudantium dolorum</a></li>
              <li><a href="#">Dinera</a></li>
              <li><a href="#">Trodelas</a></li>
              <li><a href="#">Flexo</a></li>
            </ul>
          </div>
           -->
<!-- End footer links column-->
<!-- 
        </div>
      </div>
    </div> -->
<!-- 
    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>UpConstruction</span></strong>. All Rights Reserved
        </div>
        <div class="credits"> -->
<!-- All the links in the footer should remain intact. -->
<!-- You can delete the links only if you purchased the pro version. -->
<!-- Licensing information: https://bootstrapmade.com/license/ -->
<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
<!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer> -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>