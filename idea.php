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
            margin-top: 0vh;
            margin-bottom: 5vh;
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
            <h1 class="TAcenter" style="padding-top: 20vh; color: white; font-size: 5rem;">ИДЕЯ</h1>
      </div>
      <div class="content">
        <div class="H100">
            <h3>Многие люди считают, что для того, чтобы зарабатывать в сетевом
бизнесе, нужно продавать. Но это не так!</h3>
            <p>Наша концепция бизнеса подразумевает создание сети потребителей посредством рекомендаций. Задумайтесь, мы с вами делаем это каждый день, но не получаем никакого вознаграждения!`</p>
            <p>Вспомните, когда Вы в последний раз кому-то с удовольствием рассказывали (рекомендовали) о магазине, турфирме, услуге, ресторане, интересном фильме? Вы это делали и делаете, не задумываясь о том, что Вам за рекомендацию кто-то заплатит. Любопытно, но так делают абсолютно все люди на планете!</p>
            <p>Каждый человек имеет свое четкое мнение по отношении к тому, с чем он столкнулся, что пробовал и чем пользовался!</p>
            <p>И хотим мы этого или не хотим, но всегда, когда мы говорим об этом ПОЛОЖИТЕЛЬНО — мы РЕКОМЕНДУЕМ, а если ОТРИЦАТЕЛЬНО — ПРЕДОСТЕРЕГАЕМ.</p>
            <p>Сегодня покупать товары в интернет-магазине ОЧЕНЬ УДОБНО и ВЫГОДНО!</p>
            <p>
                <img src="public/img/photo/many.png" alt="" style="width: 10%;">
            </p>
            <p>Приведем пример:</p>
            <p>Все люди пьют воду - это факт. Зададим людям, которые</p>
            <p>уже услышали о Water for life, три вопроса:</p>
            <p>Было бы Вам интересно иметь дома или всегда под рукой источник с целебной (живой) водой? Не все, но большая половина ответит - ДА!</p>
            <p>А как Вы думаете, среди Ваших друзей, знакомых, есть люди, которым это тоже было бы интересно? Те, кто на первый вопрос ответил - ДА , скажут конечно - ДА! И так до бесконечности, у каждого человека есть большое количество людей, которым это интересно, а может быть даже необходимо.</p>
            <p>А Вам было бы интересно получать 10% от каждой покупки Вашими рекомендованными людьми в интернет магазине компании? А по 10% от рекомендаций Ваших людей и т д? Все ответят однозначно - ДА!</p>
            <p>А теперь представьте, что компания IMAGINE PEOPLE выплачивает Вам - 10% с каждой покупки тех людей, которые будут приобретать продукт компании по Вашей рекомендации. Вам предоставлена возможность все контролировать и видеть через свой интернет-офис: кто купил; что купил; на какую сумму сделана покупка; какое вознаграждение Вам причитается. Более того, каждый, кто купил товар по Вашей рекомендации в интернет-магазине, получает такие же возможности что и Вы — рекомендовать и получать процент от покупки. И что самое интересное — Вам заплатят за рекомендации Ваших людей!</p>
            <p>Вы были бы заинтересованы, чтобы таких рекомендаций у Вас было очень много? Не трудно представить, как быстро начнет расти Ваша потребительская сеть, если каждый потребитель Вашей сети имеет финансовое вознаграждение за создание своей потребительской сети!</p>
            <p>И это ВЫГОДНО ВСЕМ! Компания не вкладывает большие деньги в рекламу, а делится прибылью с теми, кто ей создает товарооборот. Вы получаете глобальную бизнес-возможность, не вкладывая миллионы для открытия своего бизнеса.</p>
            <br><br>
            <p>Аналитики мирового уровня сделали вывод — 80% всего товара в мире продается и покупается за счет ПОТРЕБИТЕЛЬСКОЙ РЕКОМЕНДАЦИИ, и только 20% — за счет рекламы.</p>
            <p>Каждый день мы рекомендуем, а значит, создаем магазинам, турфирмам, кинотеатрам потребительские рынки на миллионы долларов, но не получаем за это финансовое вознаграждение.
</p>
<p>В компании «IMAGINE PEOPLE» Вы имеете возможность на основе потребительской рекомендации создать международную потребительскую сеть и воплотить в жизнь Ваши самые смелые мечты!

</p>
        
        
        
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

