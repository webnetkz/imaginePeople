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
        .country {
            border: 1px solid rgb(63, 63, 65);
            color: rgb(63, 63, 65);
            padding: 4px!important;
            position: relative;
            max-width: 25vw;
			top: 2vh;
            left: 40vw;
            padding-left: 100px!important;
            font-size: 1.5rem;
        }
        h3, p {
            color: rgb(63, 63, 65);
            text-shadow: none;
        }
        h3 {
            font-size: 2rem;
            color: rgb(75, 75, 77);
			width: 150%;
            margin: 1rem 0;
        }
        .counter p {
            color: rgb(75, 75, 77);
            width: 50%;
            font-size: 1.4rem;
        }
        hr {
            border-color: rgb(75, 75, 77);
            width: 50%!important;
            margin: 1rem 0;
        }
        .counter {
            margin-bottom: 10vh;
        }
        .one {
            height: 60vh;
            z-index: 8888;
            position: relative;
        }
        .nav {
            position: fixed;
            right: 0;
            top: 0;
            width: 30vw;
            height: 100vh;
            background: rgb(211, 212, 213);
            z-index: 88889;
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
        @media screen and (max-device-width: 900px) {
            .country {
                left: 0;
                max-width: 100%;
            }
            .nav {

                padding-top: 2vh!important;
            position: relative;
            left: -2vw;
            top: 2rem;
            width: 100vw;
            height: 50vh!important;
            background: rgb(211, 212, 213);
            z-index: 88889;
        }
            .counter {
                margin-top: 0vh!important;
                padding: 1vh 2vw!important;
                height: 400vh!important;
            }
            h1 {
                font-size: 3rem!important;
            }
            .one {
                background-image: url('public/img/photo/news.jpg');
                background-size: cover!important;
                background-repeat: no-repeat;
            }
            .cartX {
                width: 100%;
            }
            .cartsX {
                flex-direction: column;
            }
            .imgProd {
                width: 120%!important;
                height: 120%!important;
                margin-left: -2rem;
            }
            .pPrice {
                display: block;
                left: 0px!important;
            }
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
        .productHeader {
            float: right;
            font-size: 1.5rem;
            height: 2rem!important;
            padding: 0!important;
            padding-right: 5rem!important;
        }
        .productHeader span:nth-child(2) {
            font-weight: 900;
        }
        .productBlock {
            width: 100%;
        }
        .productBlock > div {
            height: 30vw;
        }
        .productBlock > div:nth-child(1) {
            background: url('public/img/photo/cartBg.webp');
            background-size: cover;
            background-position: center center;
        }
        .productBlock div:nth-child(1) img {
            width: 50vh;
            margin-top: 10vh;
        }
      </style>
    </head>
    <body>
      <?php require_once 'header.php'; ?>
      <div class="one headerAllpage" style="background-image: url('public/img/photo/product.png'); background-size: contain; background-repeat: no-repeat;">
            <h1 class="TAcenter" style="padding-top: 20vh; color: white; text-shadow: 0 0 10px rgb(50, 100, 150); font-size: 5rem;">Weater for life</h1>
      </div>
      <div class="counter" style="height: 140vh;">
         <div class="productHeader" style="margin-top: 2rem;">
            <span>СЕРИЯ</span><span>WATER FOR LIFE</span>
         </div>
         <div class="productBlock flex row">
            <div style="width: 100%">
                <img src="public/img/photo/water1.webp">
            </div>
            <div style="width: 100%">
                <div style="height: 50%; text-align: center; background: rgb(235,236,236); font-weight: 900; padding-top: 15%; font-size: 1.5rem;">WATER FOR LIFE</div>
                <div style="padding-left: 30%; padding-top: 5%;">
                    <p style="padding: 10px;">СТОИМОСТЬ: 15600тг</p>
                    <p style="padding: 10px;">СТРУКТУРА: 20 баллов</p>
                    <a href="#" style="left: 15%; top: 20px;" class="linkBtn">КУПИТЬ</a>
                </div>
            </div>
         </div>
         <p style="margin: 2rem 5%; width: 80%;">Вода загрязненная химией, плохой экологией, продуктами ядерного распада после взрывов атомных бомб и аварий на атомных электростанциях, электромагнитный шум в эфире сотовых телефонов, радио- и телепередатчиков - все это приводит к уничтожению биологически-активной характеристики воды и способствует созданию феномена «патогенной» (действующей губительно на все живое) или Мертвой воды, которая губит здоровье миллионов людей, способствует возникновению очень опасных, раннее неизвестных заболеваний. Как остановить губительное действие Мертвой воды на человечество? </p>
         <p style="margin: 2rem 5%; width: 80%;">Дать людям ЖИВУЮ ВОДУ! </p>

         <p style="margin: 2rem 5%; width: 80%;">В результате двадцатилетних исследований биофизиками Казахстана под руководством. профессора В.М. Инюшина было сделано потрясающее открытие: в природной биогенной (полезной для биологических организмов) воде обнаружено существование в небольших количествах особого вещества – плазмы (свободных комплексов из несвязанных в атомы и молекулы частиц), которая получила название гидроплазма. WATER FOR LIFE - это концентрат для приготовления биогенной (живой) воды. WATER FOR LIFE — имеет очень большую плотность частиц, а значит, и огромную свободную энергию, которая может противостоять деградации воды, возникающей под воздействием внешних негативных факторов окружающей среды и дать человеку колоссальный ресурс ЭНЕРГИИ — ДЛЯ МОЛОДОСТИ, ЗДОРОВЬЯ и ДОЛГОЛЕТИЯ! </p>

         <p style="margin: 2rem 5%; width: 80%;">WATER FOR LIFE помогает продлевать жизнь, поддерживает процессы замедления старения организма, способствует улучшению состояния клеточных мембран, улучшает энергоинформационный обмен клеточных структур. WATER FOR LIFE выстраивает качественные и устойчивые внутриклеточные, межклеточные и межсистемные связи организма человека WATER FOR LIFE способствует получению необходимых ферментов и антиоксидантов, нейтрализующих действие свободных радикалов WATER FOR LIFE помогает повысить нейроэмоциональную устойчивость, т.е. поведенческие реакции делает более адекватными, снижает уровень агрессивности и депрессий, формирует устойчивость к стрессам и нагрузкам. </p>
      </div>


      <?php require_once 'footer.php'; ?>
    
    </body>
</html>

