  <!DOCTYPE html>
  <html>
    <head>
  	    <title>Login</title>
  	    <!--Import Google Icon Font-->
  	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	    <!--Import materialize.css-->
  	    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  	    <!--Let browser know website is optimized for mobile-->
  	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  	    <style type="text/css">
        body {
          background-image: url("img/yellow.png");
          background-size: cover;
        }
        .ikon {
          margin-top: 200px;
        }
        footer {
            margin-top: 50px;
            opacity: 0.8;
          }

  	    </style>
    </head>


    <body>

      <section>
        <div class="container">
            <div class="row">
              <h5 class="center ikon"><i class=" material-icons large">account_circle</i></h5>
              <div class="col m6 push-m3 s12">
                  <form>
                      <div class="card-panel center">
                          <div class="input-field">
                              <i class="material-icons prefix">mail_outline</i>
                              <input id="email" type="email" class="validate" required>
                              <label for="email">Email</label>
                              <span class="helper-text" data-error="Email salah" data-success=""></span>
                          </div>
                          <div class="input-field">
                              <i class="material-icons prefix">lock_outline</i>
                              <input id="password" type="password" class="validate" required>
                              <label for="password">Password</label>
                              <span class="helper-text" data-error="Password salah" data-success=""></span>
                          </div>
                          <button type="submit" class="waves-effect waves-light btn cyan">LOGIN</button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
      </section>

      <footer class="footer">
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