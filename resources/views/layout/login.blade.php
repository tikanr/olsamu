<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OLSAM - Protect Our Environtment</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/waste-bank/TRASH.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/waste-bank/icon 16x16.png" />
    <link rel="manifest" href="assets/images/resources/logo-1.png" />
    <meta name="description" content="OLSAM" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/wostin-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/wostin.css" />
    <link rel="stylesheet" href="assets/css/wostin-responsive.css" />
    <style>
      .login-container {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 350px;
        margin: 100px auto;
        padding: 30px;
        text-align: center;
      }

      h1 {
        font-size: 28px;
        margin-bottom: 10px;
      }

      h2 {
        font-size: 24px;
        margin-bottom: 30px;
      }

      .login-form {
        display: flex;
        flex-direction: column;
      }

      input[type="text"],
      input[type="password"] {
        background-color: #f5f5f5;
        border: none;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
      }

      button[type="submit"] {
        background-color: #0096ff;
        border: none;
        border-radius: 5px;
        color: #ffffff;
        cursor: pointer;
        padding: 10px;
        text-transform: uppercase;
        width: 100%;
      }

      button[type="submit"]:hover {
        background-color: #0073e6;
      }

      a {
        color: #0096ff;
        text-decoration: none;
      }

      a:hover {
        text-decoration: underline;
      }
    </style>
  </head>

  <body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/loader.png" alt="" />
      </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header-three">
            <nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="main-menu-wrapper__logo">
                        <a href="index.html"><img src="assets/images/resources/logo-1.png" alt=""></a>
                    </div>
                    <div class="main-menu-three__main-menu">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li>
                                <a href="/index" class="active-tab">Beranda</a>
                            </li>
                            <li>
                                <a href="/service" class="active-tab">Layanan Kami</a>
                            </li>
                            <li>
                                <a href="/about">Tentang Kami</a>
                            </li>
                            <li>
                                <a href="/proses">Cara Kerja</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Informasi
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="/informasi">Bank Sampah</a></li>
                                  <li><a class="dropdown-item" href="/pemilihan_sampah">Pemilihan Sampah</a></li>
                                </ul>
                              </li>
                            <li>
                                <a href="/kontak">Kontak Kami</a>
                            </li>
                        </ul>
                    </div>
                    <div class="main-menu-three__right">
                        <div class="main-menu-three__search-box">
                            <a href="/login">Masuk</a>
                        </div>
                        <div class="main-menu-three__call">
                            <div class="main-menu-three__call-icon">
                                <span class="icon-budget"></span>
                            </div>
                            <div class="main-menu-three__call-number">
                                <h5><a href="/poin">Point</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
          </header>
    </div>
    <!-- /.page-wrapper -->

    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>

    <!-- template js -->
    <script src="assets/js/wostin.js"></script>
  </body>
</html>
