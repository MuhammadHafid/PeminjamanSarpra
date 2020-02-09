<?php include 'V_header.php'; ?>
<html>
<body>
  <div class="parallax-container">
    <div class="parallax"><img src="img/yellow.png"></div>
    <div class="container efek">
      <div class="row">
        <div class="col m2 push-m4"><img width=300px src="img/logo.png"></div>
      </div>

      <h2 class="center light white-text">Selamat Datang!</h2>
    </div>
  </div>

  <!-- MENU USER -->


  <section id="about" class="grey lighten-3 scrollspy">
    <div class="container">
      <div class="row mb-4">
        <div class>
          <h3 class="center">Tentang "NGAMPIL"</h2>
        </div>
      </div>

      <div class="row justify-content-center  ">
        <div class="col-md-5 text-center">
          <p> "Ngampil Online" adalah sebuah situs peminjaman barang Inventaris SARPRA SMK TELKOM MALANG. Sasaran
            pengguna nya yaitu warga SMK TELKOM MALANG, Seluruh
            warga sekolah dapat menggunakan web ini. Web ini dibuat untuk memudahkan Warga sekolah untuk meminjam barang
            yang menjadi Inventaris SARPRA, seperti : LCD, Kabel VGA atau apapun yang terdapat pada Inventaris SARPRA
            SMK TELKOM MALANG. </p>
        </div>
        <div class="col-md-5 text-center">
          <p> Untuk meminjam anda bisa mengklik tombol "PINJAM BARANG" dibawah, lalu mengisi Form Pinjam Barang. Untuk
            melihat
            data barang yang terpinjam anda bisa mengklik "DATA PINJAM BARANG" didalamnya terdapat data lengkap
            mulai dari peminjam, tanggal pinjam, tanggal kembali, status barang </p>
        </div>
      </div>
    </div>
  </section>



  <section>
    <div class="container">
      <div class="row">
        <div class="card-panel col m6 pull-m1 center pilih">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="img/parallax.png">
          </div>
          <div class="card-content">
            <p><a href="permohonan_cuti.html" class="waves-effect waves-light btn cyan">PINJAM BARANG</a></p>
          </div>
        </div>
        <div class="card-panel col m6 push-m1 center pilih">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="img/header-bg.jpg">
          </div>
          <div class="card-content">
            <p><a href="view_cuti_sendiri.html" class="waves-effect waves-light btn cyan">DATA PINJAM BARANG</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->

  <footer class="footer #ffa000 amber darken-2">
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <div class="center">

      <img src="https://www.smktelkom-mlg.sch.id/assets/front/img/logo-moklet.png" alt="" class="logo">

      <p class="footer-company-about">
        <br><br>
        <small></small>
        Pelopor SMK bidang Teknologi dan Informatika di Indonesia.<br>Berpengalaman dari tahun 1992 yang telah
        terakreditasi "A"<br>dan mempunyai standart mutu ISO 9001:2008.
      </p><br><br>
      <small></small>

      <p class="footer-company-name">SMK TELKOM MALANG &copy; 2018</p>
    </div>

    <div class="center">

      <div>
        <a href="https://goo.gl/maps/KGkHAA4QvRH2">
          <i class="fa fa-map-marker"></i></a>
        <p><span>Jl. Danau Ranau </span> Sawojajar, Malang</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p>0341-712500</p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:info@smktelkom-mlg.sch.id">info@smktelkom-mlg.sch.id</a></p>
      </div>

    </div>

  </footer>

  <!-- Bats footer -->

</body>

</html>



<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
  const sideNav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sideNav);
  const parallax = document.querySelectorAll('.parallax');
  M.Parallax.init(parallax);
  const scroll = document.querySelectorAll('.scrollspy');
  M.ScrollSpy.init(scroll, {
    scrollOffset: 50
  })
</script>
</body>

</html>
