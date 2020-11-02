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
        .country {
            border: 1px solid rgb(63, 63, 65);
            color: rgb(63, 63, 65);
            padding: 4px!important;
            position: relative;
            max-width: 25vw;
            left: 30vw;
            padding-left: 100px!important;
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }
        @media screen and (max-device-width: 900px) {
            .country {
                border: 1px solid rgb(63, 63, 65);
                color: rgb(63, 63, 65);
                padding: 4px!important;
                position: relative;
                max-width: 90vw;
                left: 5vw;
                padding-left: 5px!important;
                font-size: 1.5rem;
                margin-bottom: 1.5rem;
            }
            p {
                color: rgb(75, 75, 77);
                width: 100%;
            }
            .content {
                overflow-x: hidden!important;
                margin-top: 5vh!important;
                margin-bottom: 0!important;
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
            .country {
                left: 0;
                max-width: 100%;
            }
            .nav {
                padding-top: 2vh!important;
                position: relative!important;
                left: -2vw;
                top: 2rem;
                width: 100vw;
                height: 55vh!important;
                background: rgb(211, 212, 213);
                z-index: 88889;
            }
            .cartX {
                width: 100%!important;
            }
            .cartsX {
                flex-direction: column!important;
            }
            .nav {
                position: relative!important;
                left: -5%!important;
                top: 4rem!important;
                width: 110%!important;
                height: 50vh!important;
                background: rgb(211, 212, 213);
            }
            .nav > h3, ul, input {
                position: relative;
                top: -45vh;
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
            background-image: url('public/img/photo/products.png');
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
            margin-bottom: 5vh;
            padding:  0 5% 0!important;
        }
        header {
            background: rgba(0, 0, 0, 0.5);
        }
        .imgProd {
            width: 100%;
        }
        .pDes {
            width: 100%!important;
            text-align: center!important;
        }
        .pPrice {
            color: rgb(0, 152, 218);
        }


        .nav {
            position: fixed;
            right: 0;
            top: 0;
            width: 30vw;
            height: 100vh;
            padding: 0 5% 0;
            background: rgb(211, 212, 213);
            z-index: 0;
            padding-top: 50vh!important;
        }
        li {
            list-style-type: none;
            color: rgb(114, 115, 118);
        }
        .inpSearch {
            padding: 5px;
            color: white;
            background: rgb(0, 152, 218);
            border: 1px solid rgb(114, 115, 118);
            font-size: 2rem;
            width: 80%;
        }
        .inpSearch:focus {
            transform: scale(1.1);
            border-radius: 5px;
            box-shadow: 0 0 20px black;
        }
        .cartX {
            width: 100%;
        }
        .cartsX {
            flex-direction: column;
        }
      </style>
    </head>
    <body>
      <?php require_once 'header.php'; ?>
      <div class="topImg headerAllpage">
        <h1 class="TAcenter" style="padding-top: 20vh; color: white; font-size: 5rem;">ИЗМЕНЕНИЕ КУРСА ВАЛЮТ</h1>
      </div>
      <div class="content">

        <img src="public/img/photo/post.png" alt="" style="width: 50%; margin-left: 10%;">
        <br><br>
        <div style="margin-left: 10%;">
            <h3>5 октября 2020</h3>
            <p>Уважаемые партнеры компании!</p>
            <p>«IMAGINE PEOPLE» спешит донести до вашего сведения важную </p>
            <p>информацию об изменениях курса У.Е. по отношению к тенге. </p>
            <p>На сегодняшний день курс У.Е. выглядит следующим образом:</p>
            <br><br>
            <p>1 y.e. = 350 KZT (тенге)</p>
            <p> 1 y.e. = 65 RUB (рублей)</p>
            <p>1 y.e. = 1 USD (долларов)</p>
            <p>1 y.e. = 29.54 UAH (гривен)</p>
            <p>1 y.e. = 0.7 EUR (евро)</p>
            <p>1 y.e. = 65 KGS (киргизских сомов)</p>
            <br><br>
            <p>Компания акцентирует внимание партнеров на том, что данные </p>
            <p>изменения вступили в силу с «1» октября 2020 г.</p>
            <br><br>
            <p>«IMAGINE PEOPLE» благодарит партнеров за понимание!</p>
        </div>
      
        <div class="nav">
            <h3>Месяц</h3>
            <select name="select" style=" border: none; padding: 5px; font-size: 1.5rem; color: rgb(67, 66, 66); margin-bottom: 2rem;"> <!--Supplement an id here instead of using 'name'-->
            <option value="value1">Значение 1</option> 
            <option value="value2" selected>Значение 2</option>
            <option value="value3">Значение 3</option>
            </select>

            <div>
                <h3>Предыдущая новость</h3>
                <p>[Вебинар] 150 000руб в месяц!</p>
                <small>3 октября 2020</small>
            </div>
                <br>
            <div>
                <h3>Следующая новость</h3>
                <p>Дополнительная информация</p>
                <small>7 октября 2020</small>
            </div>
                <br>
            <p>(Вывод средств)</p>
        </div>
    
      </div>      
      <?php require_once 'footer.php'; ?>


    
    </body>
</html>

