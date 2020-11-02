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
            height: 100vh;
        }
        [data-num]:before {
          content: "+";
          opacity: 0;
        }
        [data-num]:after {
          content: "+";
        }
        .Elems {
            height: 12rem;
            padding: 5px;
            margin: 1rem 0;
        }
        .Elems > h3, p {
            color: rgb(63, 63, 65);
            text-shadow: none;
        }
        .Elems > h3 {
            color: rgb(75, 75, 77);
            margin-bottom: 1rem;
        }
        .Elems > p {
            color: rgb(75, 75, 77);
            width: 50%;
        }
        .Elems hr {
            border-color: rgb(75, 75, 77);
            width: 50%!important;
            margin: 1rem 0;
        }
        .newsImg {
            position: relative;
            height: 15rem;
            top: 20vh;
            left: 70%;
        }

        @media screen and (max-device-width: 900px) {
            .Elems > p {
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
                margin-top: -30vh!important;
                margin-bottom: 35vh!important;
                padding: 1vh 2vw!important;
            }
            .Elems {
                height: 40rem;
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
            margin-top: -30vh;
            margin-bottom: 25vh;
            padding: 0 5% 0;
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
        <div class="flex col H100">
            <div class="Elems" onclick="location.href='new.php'">
                <img src="public/img/photo/newsImg.jpg" alt="" class="newsImg inline">
                <h3>Двойной бонус!</h3>
                <p>«IMAGINE PEOPLE» рада представить вашему 
                    вниманию новую программу "Двойной бонус"! 
                    Если в течение августа вы подключаете 5 партнеров 
                    на 5 одинаковых пакетов, то вы удваиваете свой бонус!
                    <hr>
                </p>
                    <a href="new.php" class="linkBtn" style="top: 0; left: 0;">ЧИТАТЬ ДАЛЕЕ</a>
            </div>
            <div class="Elems" onclick="location.href='new.php'">
                <img src="public/img/photo/newsImg.jpg" alt="" class="newsImg inline">
                <h3>Двойной бонус!</h3>
                <p>«IMAGINE PEOPLE» рада представить вашему 
                    вниманию новую программу "Двойной бонус"! 
                    Если в течение августа вы подключаете 5 партнеров 
                    на 5 одинаковых пакетов, то вы удваиваете свой бонус!
                    <hr>
                </p>
                    <a href="new.php" class="linkBtn" style="top: 0; left: 0;">ЧИТАТЬ ДАЛЕЕ</a>
            </div>
            <div class="Elems" onclick="location.href='new.php'">
                <img src="public/img/photo/newsImg.jpg" alt="" class="newsImg inline">
                <h3>Двойной бонус!</h3>
                <p>«IMAGINE PEOPLE» рада представить вашему 
                    вниманию новую программу "Двойной бонус"! 
                    Если в течение августа вы подключаете 5 партнеров 
                    на 5 одинаковых пакетов, то вы удваиваете свой бонус!
                    <hr>
                </p>
                    <a href="new.php" class="linkBtn" style="top: 0; left: 0;">ЧИТАТЬ ДАЛЕЕ</a>
            </div>
            
        </div>
      </div>

      <script>
        window.addEventListener('scroll', function() {
            if(pageYOffset > 50) {
                document.querySelector('header').style.background = 'rgb(0, 0, 0, 0.5)';
            } else {
                document.querySelector('header').style.background = 'rgb(0, 0, 0, 0)';
            }
        }); 
      </script>

      <?php require_once 'footer.php'; ?>
    
    </body>
</html>

