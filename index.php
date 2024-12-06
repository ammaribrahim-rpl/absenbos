  <?php
  session_start();
  include("koneksi.php");

  ?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABSEN</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">

    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- Link to CSS Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
      /* Global Styling */
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #6a11cb, #2575fc);
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
      }

      .container {
        text-align: center;
        animation: fadeIn 1.5s ease-in-out;
      }

      h1 {
        font-size: 3rem;
        font-weight: bold;
        letter-spacing: 2px;
        animation: bounceInDown 1.2s ease-in-out;
      }

      .button-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin-top: 20px;
        animation: fadeInUp 1.5s ease-in-out;
      }

      .btn {
        padding: 15px 30px;
        border: none;
        border-radius: 8px;
        font-size: 1.2rem;
        font-weight: bold;
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
      }

      .btn-warning {
        background-color: #f39c12;
        color: white;
      }

      .btn-warning:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      .btn-primary {
        background-color: #3498db;
        color: white;
      }

      .btn-primary:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      }

      /* Animations */
      @keyframes fadeIn {
        from {
          opacity: 0;
        }

        to {
          opacity: 1;
        }
      }

      @keyframes bounceInDown {
        0% {
          opacity: 0;
          transform: translateY(-50px);
        }

        60% {
          opacity: 1;
          transform: translateY(10px);
        }

        100% {
          transform: translateY(0);
        }
      }

      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(30px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
    </style>
  </head>

  <body>
    <div class="container">
      <h1>ABSENBOS</h1>
      <div class="button-container">
        <a href="login.php" target="_blank">
          <button class="btn btn-warning">Login Admin</button>
        </a>
        <a href="karyawan/login_karyawan.php" target="_blank">
          <button class="btn btn-primary">Login Karyawan</button>
        </a>
      </div>
    </div>

    <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
  </body>

  </html>