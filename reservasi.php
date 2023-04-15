<?php
  include 'connection/conn.php';
  $sql = "SELECT * FROM pemeriksaan";
	$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Reservasi - Manlab</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- get price from dropdown list pemeriksaan -->
  <script src="js/emp.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">Manlab@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Manlab<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>e-Reservasi</h2>
              <p>Masukkan data pribadi dan informasi layanan reservasi dengan benar.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Reservasi</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="reservasi" class="contact">
        <div class="container" data-aos="fade-up">

            <!-- <div class="section-header">
              <h2>Data Pasien</h2>
            </div> -->

            <div class="card" style="background-color:#18746b">
              <div class="card-body">
                <h4 class="card-title text-white">Ketentuan pendaftaran online</h4>
                <p class="card-text">
                  <ol style="color:white">
                    <li>
                      Pendaftaran Online bisa dilakukan oleh pasien yang telah memiliki No. Rekam Medik maupun pasien baru Umum dan JKN.    
                    </li>
                    <li>
                      Pendaftaran Online dapat dilakukan dengan Jadwal H+1 s.d H+30 dari hari mendaftar.
                    </li>
                    <li>
                      Pendaftaran online dapat dilakukan setiap hari (7x24 jam) dengan jam verifikasi setiap hari sampai dengan jam 16.30    
                    </li>
                    <li>
                      Pasien yang telah mendaftar online akan mendapatkan pesan melalui Email atau Whatsapp berisi pemberitahuan jadwal reservasi                      
                    </li>
                    <li>
                      Apabila anda telah melakukan pendaftaran online, anda akan mendapat bukti registrasi dan nomor urut.
                    </li>
                    <li>
                      Apabila Anda ingin melakukan Cetak Kembali Bukti Pendaftaran Online setelah mendaftar atau ingin membatalkan reservasi dapat melakukan di Cek Kode Bukti Pendaftaran pada form di halaman ini.
                    </li>
                    <li>
                      No Antrian adalah sesuai dengan urutan ketika melakukan reservasi.                      
                    </li>
                    <li>
                    Urutan pelayanan berdasarkan nomor antri yang didapatkan pada waktu melakukan pendaftaran online. Pasien yang melakukan pendaftaran onsite akan mendapatkan nomor antrian setelah pendaftaran online                      
                    </li>
                  </ol> 
                </p>
              </div>
            </div>

            <br>

            <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">

                <div class="info-container d-flex flex-column align-items-center justify-content-center">

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                          <h4>Email:</h4>
                          <p>Manlab@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                          <h4>Open Hours:</h4>
                          <p>Mon-Sat: 11AM - 23PM</p>
                        </div>
                    </div><!-- End Info Item -->
                </div>

            </div>

            <div class="col-lg-8">
                <form action="insert-reservasi.php" method="POST" class="php-email-form">
                    <div class="row">

                        <div class="col-lg-10">
							            <h3 class="mb-2" style="color:#18746b">Data Pasien</h3>
                          <p class="mb-4">Lengkapi dan Periksa Data Anda Sebelum Reservasi.</p>
					            	</div>

                        <div class="col-md-6 form-group">
                            <label for="nik">NIK:</label>
                            <input type="text" name="nik" class="form-control" id="nik" >
                        </div>

                        <div class="col-md-6 form-group">         
                            <label for="nama">Nama Lengkap: </label>
                            <input type="text" name="nama" class="form-control" id="nama" >
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="tempatLahir">Tempat Lahir:</label>
                            <input type="text" name="tempatLahir" class="form-control" id="tempatLahir" >
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="tglLahir">Tanggal Lahir:</label>
                            <input type="date" name="tglLahir" class="form-control" id="tglLahir" >
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="usia">Usia:</label>
                            <input type="text" name="usia" class="form-control" id="usia" >
                        </div>

                        <div class="col-lg-6 form-group">
                          <label for="gender">Jenis Kelamin:</label>
                            <div class="form-check">
                              <label class="form-check-label" for="genderL">Laki-laki</label>
                              <input type="radio" class="form-check-input" id="genderL" name="gender" value="L" checked>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label" for="genderP">Perempuan</label>
                              <input type="radio" class="form-check-input" id="genderP" name="gender" value="P" >
                            </div>
                          <!-- <select class="form-control" id="gender" name="gender">
                            <option value="0">Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                          </select> -->
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" >
                        </div>

                        <div class="col-lg-6 form-group">
                          <label for="statusNikah">Status Pernikahan:</label>
                          <select class="form-control" id="statusNikah" name="statusNikah">
                            <option value="0">Pilih Status Pernikahan</option>
                            <option value="Nikah">Nikah</option>
                            <option value="Belum Nikah">Belum Nikah</option>
                          </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="pekerjaan">Pekerjaan:</label>
                            <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" >
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="golDarah">Golongan Darah:</label>
                            <select class="form-control" id="golDarah" name="golDarah">
                              <option value="0">Pilih Gol. Darah</option>
                              <option value="A">A</option>
                              <option value="B">B</option>
                              <option value="AB">AB</option>
                              <option value="O">O</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="phone">No Telephon:</label>
                            <input type="text" name="phone" class="form-control" id="phone" >
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" >
                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="jamkes">Jaminan Kesehatan:</label>
                            <select class="form-control" id="jamkes" name="jamkes">
                              <option value="0">Pilih Jaminan Kesehatan</option>
                              <option value="Mandiri">Mandiri</option>
                              <option value="BPJS">BPJS</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="noJamkes">No. Jaminan Kesehatan:</label>
                            <input type="text" name="noJamkes" class="form-control" id="noJamkes" >
                        </div>


                        <div class="col-lg-10">
                          <h3 class="mb-2" style="color:#18746b">Data Reservasi</h3>
                          <p class="mb-4">Tentukan waktu dan layanan sesuai keiinginan anda.</p>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="tglDaftar">Tanggal daftar:</label>
                            <input type="date" name="tglDaftar" class="form-control" id="tglDaftar" >
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="tglReservasi">Tanggal reservasi:</label>
                            <input type="date" name="tglReservasi" class="form-control" id="tglReservasi" >
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="jenisPemeriksaan">Jenis Pemeriksaan:</label>
                            <select class="form-control" id="jenisPemeriksaan" name="jenisPemeriksaan" onchange="fetchemp()">
                            <option value="">--Pilih Pemeriksaan--</option>
                            <?php
                              while($rows = mysqli_fetch_array($result)) {
                                $k = $rows['id'];
                                $l = $rows['namaPemeriksaan'];
                                echo '<option value="'.$k.'">'.$l.'</option>';
                              }
                            ?>
                          </select>
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="harga">Harga:</label>
                            <input type="text" name="harga" class="form-control" id="harga" readonly required>
                        </div>

                    </div>

                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>

                    <div class="text-center"><button type="submit" name="submit">Booking</button></div>
                </form>
            </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.php" class="logo d-flex align-items-center">
            <span>Manlab</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            Sleman, D.I Yogyakarta 535022<br>
            Indonesia <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>