<?php include 'V_header.php'; ?> 

 <!DOCTYPE html>
  <html>
    <body>
    <section class="formulir">
        <div class="container">
            <h3 class="light center grey-text text-darken-3 efek">Form Pinjam Barang</h3>
            <div class="row">
              <div class=" card-panel col m8 push-m2 s12 center">
                
                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="nama" type="text" required>
                  <label for="nama">Barang </label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">today</i>
                  <input id="mulai" type="text" class="datepicker" required>
                  <label for="mulai">Tanggal Pengembalian</label>
                </div>
            
               
                <button type="submit" class="waves-effect waves-light btn cyan ajukan">AJUKAN</button>
              </div>
            </div>
        </div>
    </section>

    <footer class="footer #ffa000 amber darken-2">
        <link rel="stylesheet" type="text/css" href="css/demo.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <div class="center">
    
          <img src="https://www.smktelkom-mlg.sch.id/assets/front/img/logo-moklet.png" alt="" class="logo">
    
          <p class="footer-company-about">
            <br><br>
          <small></small>
            Pelopor SMK bidang Teknologi dan Informatika di Indonesia.<br>Berpengalaman dari tahun 1992 yang telah terakreditasi "A"<br>dan mempunyai standart mutu ISO 9001:2008.
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
    </body>
    </html>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);
        const datePicker = document.querySelectorAll('.datepicker');
        M.Datepicker.init(datePicker);
      </script>
    </body>
  </html>