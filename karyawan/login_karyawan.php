
 <!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="icon" href="img/Fevicon.png" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> <!-- For Animation -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main-w3layouts {
            background: #fff;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2.5em;
            animation: fadeInUp 1s;
        }

        .main-agileinfo {
            display: flex;
            flex-direction: column;
        }

        .agileits-top {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .text {
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
        }

        .text:focus {
            border-color: #1E90FF;
            box-shadow: 0 0 5px rgba(30, 144, 255, 0.5);
        }

        input[type="submit"] {
            background-color: #1E90FF;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #4b9cd3;
        }

        .colorlib-bubbles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .colorlib-bubbles li {
            position: absolute;
            list-style: none;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.7);
            animation: animateBubbles 10s infinite;
        }

        .colorlib-bubbles li:nth-child(1) {
            width: 50px;
            height: 50px;
            animation-duration: 6s;
            animation-delay: 0s;
        }

        .colorlib-bubbles li:nth-child(2) {
            width: 80px;
            height: 80px;
            animation-duration: 8s;
            animation-delay: 2s;
        }

        .colorlib-bubbles li:nth-child(3) {
            width: 100px;
            height: 100px;
            animation-duration: 7s;
            animation-delay: 4s;
        }

        /* Add more bubble styles as needed */
        
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes animateBubbles {
            0% {
                transform: translateY(0) scale(1);
            }
            100% {
                transform: translateY(-800px) scale(0);
            }
        }
    </style>
</head>
<body>
  <!-- main -->
  <div class="main-w3layouts wrapper animate__animated animate__fadeInUp">
        <h1>Login Karyawan</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="pro_login_karyawan.php" method="post">
                    <input class="text" type="text" name="username" placeholder="Username" required=""><br>
                    <input class="text" type="password" name="password" placeholder="Password" required="">
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

  <!-- //main -->
</body>
</html>