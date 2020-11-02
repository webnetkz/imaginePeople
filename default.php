<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Show Rooms</title>
      <meta charset="UTF-8">
      <meta name="theme-color" content="rgb(255, 255, 255)">
      <meta name="author" content="">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="robots" content="index, follow">     
      <link rel="shortcut icon" href="/public/img/miniLogo.png" type="image/png">
      <link rel="apple-touch-icon" href="/public/img/logo.png">
      <style>
        @import 'public/css/animation.css';
        @import 'public/css/helper.css';
        * {
            margin: 0;
            padding: 0;
        }
        html, body {
            font-family: 'Roboto', sans-serif;
            background-color: rgb(255, 255, 255);
            scroll-behavior: smooth;
            overflow-x: hidden;
            height: 100%;
        }
        h3, p {
            color: rgb(63, 63, 65);
            text-shadow: none;
        }
        h3 {
            color: rgb(75, 75, 77);
            margin-bottom: 1rem;
        }
        p {
            color: rgb(75, 75, 77);
            width: 50%;
        }
        .newsImg {
            position: relative;
            height: 15rem;
            top: 20vh;
            left: 70%;
        }

        @media screen and (max-device-width: 900px) {
            p {
                color: rgb(75, 75, 77);
                width: 100%;
            }
            .content > div {
                margin-top: 30vh!important;
                height: 180vh!important;
                padding: 1vh 2vw!important;
            }
            .content {
                overflow-x: hidden!important;
                margin-top: 25vh!important;
                margin-bottom: 5vh!important;
                padding: 1vh 2vw!important;
            }
            h1 {
                font-size: 3rem!important;
            }
            .newsImg {
                position: relative;
                top: 0;
                left: 0;
                display: block;
                width: 300px!important;
                height: 300px!important;
            }
            .topImg {
                background-image: url('public/img/photo/news.jpg');
                background-size: cover!important;
                background-repeat: no-repeat;
            }
        }
        .topImg {
            box-sizing: border-box;
            position: relative;
            top: 0;
            left: 0;
            width: 100vw;
            height: 60vh;
            z-index: 1;
            background-image: url('public/img/photo/news.jpg');
            background-size: contain;
            background-repeat: no-repeat;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
            animation: showHeader 3s infinite;
        }
        @keyframes showHeader {
                0% {

                }
                40% {
                    filter: brightness(1)
                }
                50% {
                    filter: brightness(2)
                }
                60% {
                    filter: brightness(1)
                }
        }
        .content {
            margin-top: -5vh;
            margin-bottom: 45vh;
            padding:  5% 0;
        }
        header {
            background: rgba(0, 0, 0, 0.5);
        }
      </style>
    </head>
    <body>
      <?php require_once 'header.php'; ?>
      <div class="topImg headerAllpage">
            <h1 class="TAcenter" style="padding-top: 20vh; color: white; font-size: 5rem;">НОВОСТИ КОМПАНИИ</h1>
      </div>
      <div class="content">


    
      </div>      
      <?php require_once 'footer.php'; ?>


    
    </body>
</html>

