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
      <link rel="stylesheet" type="text/css" href="public/css/style.css">
      <link rel="stylesheet" href="public/css/mobileStyle.css">
      <style>
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
        .Elems:hover {
            padding: 1px;
            padding-left: 30px;
            background: rgb(250, 250, 250);
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
        .counter {
            margin-bottom: 10vh;
        }
        .one {
            height: 60vh;
        }
        @media screen and (max-device-width: 900px) {
            .Elems > p {
                color: rgb(75, 75, 77);
                width: 100%;
            }
            .counter > div {
                margin-top: 30vh!important;
                height: 180vh!important;
                padding: 1vh 2vw!important;
            }
            .counter {
                overflow-x: hidden!important;
                margin-top: -30vh!important;
                margin-bottom: 20vh!important;
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
            .one {
                background-image: url('public/img/photo/news.jpg');
                background-size: cover!important;
                background-repeat: no-repeat;
            }
        }
      </style>
    </head>
    <body>
      <?php require_once 'header.php'; ?>
      <div class="one headerAllpage" style="background-image: url('public/img/photo/news.jpg'); background-size: contain; background-repeat: no-repeat;">
            <h1 class="TAcenter" style="padding-top: 20vh; color: white; font-size: 5rem;">НОВОСТИ КОМПАНИИ</h1>
      </div>
      <div class="counter" style="margin-top: -50vh;height: 130vh;padding: 1vh 10vw; padding-top: 11vh; overflow: scroll;">
        <div class="flex col">
            <div class="Elems">
                <img src="public/img/photo/newsImg.jpg" alt="" class="newsImg inline">
                <h3>Двойной бонус!</h3>
                <p>«IMAGINE PEOPLE» рада представить вашему 
                    вниманию новую программу "Двойной бонус"! 
                    Если в течение августа вы подключаете 5 партнеров 
                    на 5 одинаковых пакетов, то вы удваиваете свой бонус!
                    <hr>
                </p>
                    <a href="#" class="linkBtn" style="top: 0; left: 0;">ЧИТАТЬ ДАЛЕЕ</a>
            </div>
            <div class="Elems">
                <img src="public/img/photo/newsImg.jpg" alt="" class="newsImg inline">
                <h3>Двойной бонус!</h3>
                <p>«IMAGINE PEOPLE» рада представить вашему 
                    вниманию новую программу "Двойной бонус"! 
                    Если в течение августа вы подключаете 5 партнеров 
                    на 5 одинаковых пакетов, то вы удваиваете свой бонус!
                    <hr>
                </p>
                    <a href="#" class="linkBtn" style="top: 0; left: 0;">ЧИТАТЬ ДАЛЕЕ</a>
            </div>
            <div class="Elems">
                <img src="public/img/photo/newsImg.jpg" alt="" class="newsImg inline">
                <h3>Двойной бонус!</h3>
                <p>«IMAGINE PEOPLE» рада представить вашему 
                    вниманию новую программу "Двойной бонус"! 
                    Если в течение августа вы подключаете 5 партнеров 
                    на 5 одинаковых пакетов, то вы удваиваете свой бонус!
                    <hr>
                </p>
                    <a href="#" class="linkBtn" style="top: 0; left: 0;">ЧИТАТЬ ДАЛЕЕ</a>
            </div>
            
        </div>
      </div>


      <?php require_once 'footer.php'; ?>
    
    </body>
</html>

