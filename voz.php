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
        .highlight {
            background-color: rgb(255, 237, 0);
            padding: 5px;
        }

        .highlightRed {
            background-color: rgb(227, 30, 36);
            padding: 5px;
            margin-left: -2.5%;
            font-size: 2.5rem;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }

        .highlightBlue {
            background-color: rgb(57, 49, 133);
            padding: 5px;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }

        .highlightOrange {
            background-color: rgb(239, 127, 26);
            padding: 5px;
            font-size: 2.5rem;
            margin-left: -2.5%;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }

        .highlightOcean {
            background-color: rgb(0, 141, 210);
            padding: 5px;
            font-size: 2.5rem;
            margin-left: -2.5%;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }
        html, body {
            font-family: 'Roboto', sans-serif;
            background-color: rgb(255, 255, 255);
            scroll-behavior: smooth;
            overflow-x: hidden;
            height: 100%;
            color: rgb(67, 66, 66);
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
            width: 100%;
            font-size: 1.2rem;
            line-height: 2rem;
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
                background-image: url('public/img/photo/headBg.jpg');
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
            background-image: url('public/img/photo/headBg.jpg');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            /* clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%); */
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
            padding:  5% 5% 0!important;
            color: rgb(67, 66, 66);
        }
        header {
            background: rgba(0, 0, 0, 0.5);
        }
        .blockS {
            position: relative;
            top: -10vh;
            left: 75vw;
            max-width: 25vh;
            border: 1px solid rgb(67, 66, 66);
            padding: 5px;
            height: 5rem;
        }
        .pack {
            width: 115%;
            margin-left: -7.5%;
            height: 60vh;
            background: url('public/img/photo/voz1.jpg');
            background-size: cover;
            background-position: 50% 100%;
            margin-bottom: 2rem;
        }
        .pack2 {
            background: url('public/img/photo/voz2.jpg');
            background-size: cover;
            background-position: 50% 0%;
        }
        .pack .p {
            color: white;
            position: relative;
            top: 1rem;
            left: 52%;
            font-size: 2.5rem;
        }
        .pack .h {
            font-size: 7rem;
            color: white;
            position: relative;
            left: 60%;
            top: -3rem;
        }
        .pack2 .p {
            color: white;
            position: relative;
            top: -3rem;
            left: 49%;
            font-size: 2.5rem;
        }
        .pack2 .h {
            font-size: 7rem;
            color: white;
            position: relative;
            left: 50%;
            top: 0rem;
        }
        .fil {
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            padding: 0 5% 0;
        }
        .fil > div {
            font-size: 1.5rem;
        }
        .ye {
            position: relative;
            top: -35vh;
            left: 90%;
            color: rgb(67, 66, 66);
            font-size: 3.5rem!important;
        }
        .imgBonus {
            height: 15vh;
            background: url('public/img/photo/bonus.jpg');
            background-size: contain;
            background-position: center center;
            margin-bottom: 1rem;
        }
      </style>
    </head>
    <body>
      <?php require_once 'header.php'; ?>
      <div class="topImg headerAllpage">
            <h1 style="padding-top: 20vh; color: white; font-size: 5rem;" class="TAcenter"><span class="highlight">БИЗНЕС</span> ВОЗМОЖНОСТИ</h1>
            <h2 style="padding-top: 3vh; color: white; font-size: 2.5rem;" class="TAcenter">СТАТЬ ПАРТНЕРОМ КОМПАНИИ МОЖЕТ КАЖДЫЙ!</h2>
            <style>
                @keyframes jump {
                    0% {
                        top: 7rem;
                    }
                    50% {
                        top: 5rem;
                    }
                    70% {
                        top: 7rem;
                    }
                    80% {
                        top: 6.5rem;
                    }
                    100% {
                        top: 7rem;
                    }
                }
            </style>
                <img src="public/img/photo/ars.png" alt="" style="width: 7rem; position: relative; left: 47%; top: 7rem; animation: jump 1s infinite;">
      </div>
      <div class="content">
        <h2 class="inline" style="padding-left: 1rem; margin-bottom: 1rem;">СТАТЬ ПАРТНЕРОМ КОМПАНИИ <h1 class="highlight inline">ОЧЕНЬ ПРОСТО</h1></h2>
            <p style="padding-left: 1rem;">Необходимо приобрести интернет магазин - офис <br>
            стоимостью 30 у.е. и
            </p>
            <p style="padding-left: 1rem; margin-top: 1.5rem;">
                один из <span style="font-size: 2rem;">3-x</span> <br>
                представленных ниже <br>
                бизнес-пакетов:
            </p>
            <div class="blockS">
                <h1 class="H">START</h1><span style="float: right; margin-top: -2rem;">1 шт. - WFL</span>
                <p>ПАКЕТ <span class="highlight">120y.e</span></p><span style="float: right; margin-top: -1rem;">1 шт. - AE <pre>   </pre></span>
            </div>

        <div class="pack">
            <div class="fil">
                <span class="p">ПАКЕТ</span>
                <span class="h">STANDART</span>

                <div class="flex row betweenJC endAI" style="color: white; ">
                    <div class="flex">
                        <ol>
                            <h3 style="color: white; margin-left: -2rem;">Вариант <span class="highlight" style="color: rgb(67, 66, 66);">No 1</span></h3>
                            <li>2 шт. - WFL</li>
                            <li>1 шт. - AE</li>
                            <li>1 шт. - G-BIO</li>
                            <li>1 шт. - INTUITE</li>
                            <li>1 шт. - W NATURE</li>
                            <li>1 шт. - ALFA</li>
                            <li>1 шт. - ANTISTRESS WATER</li>
                            <li>1 шт. - LIFE FOOD proACTIVE</li>
                            <li>1 шт. - LIFE FOOD</li> <br>
                            LIFEENERGY VANILLA
                        </ol>
                    </div>
                    <div class="flex">
                        <ol>
                            <h3 style="color: white; margin-left: -2rem;">Вариант <span class="highlight" style="color: rgb(67, 66, 66);">No 2</span></h3>
                            <li>3 шт. - WFL</li>
                            <li>1 шт. - AE</li>
                            <li>1 шт. - G-BIO</li>
                            <li>1 шт. - INTUITE</li>
                            <li>2 шт. - W NATURE</li>
                            <li>1 шт. - CLEAR SPACE II</li>
                        </ol>
                    </div>
                    <div class="flex">
                        <ol>
                            <h3 style="color: white; margin-left: -2rem;">Вариант <span class="highlight" style="color: rgb(67, 66, 66);">No 3</span></h3>
                            <li>8 шт. - WFL</li>
                            <li>2 шт. - AE</li>
                            <li>2 шт. - W NATURE</li>
                        </ol>
                    </div>
                </div>
                <div class="ye highlight inline">500y.e</div>
            </div>
        </div>
        <div class="pack pack2">
            <div class="fil">
                <span class="p">ПАКЕТ</span>
                <span class="h">STANDART</span>
                <div class="flex row betweenJC endAI" style="color: white; padding-top: 6rem;">
                    <div class="flex">
                        <ol>
                            <h3 style="color: white; margin-left: -2rem;">Вариант <span class="highlight" style="color: rgb(67, 66, 66);">No 1</span></h3>
                            <li>4 шт. - WFL</li>
                            <li>2 шт. - AE</li>
                            <li>2 шт. - G-BIO</li>
                            <li>2 шт. - INTUITE</li>
                            <li>2 шт. - W NATURE</li>
                            <li>1 шт. - ALFA</li>
                            <li>1 шт. - BETA</li>
                            <li>1 шт. - CLEAR SPACE II</li>
                        </ol>
                    </div>
                    <div class="flex">
                        <ol>
                            <h3 style="color: white; margin-left: -2rem;">Вариант <span class="highlight" style="color: rgb(67, 66, 66);">No 2</span></h3>
                            <li>6 шт. - WFL</li>
                            <li>3 шт. - AE</li>
                            <li>2 шт. - G-BIO</li>
                            <li>2 шт. - INTUITE</li>
                            <li>2 шт. - W NATURE</li>
                            <li>1 шт. - ALFA</li>
                            <li>1 шт. - BETA</li>
                            <li>2 шт. - LIFE FOOD proACTIVE</li>
                            <li>1 шт. - LIFE FOOD LIFEENERGY VANILLA</li>
                        </ol>
                    </div>
                    <div class="flex">
                        <ol>
                            <h3 style="color: white; margin-left: -2rem;">Вариант <span class="highlight" style="color: rgb(67, 66, 66);">No 3</span></h3>
                            <li>16 шт. - WFL</li>
                            <li>4 шт. - AE</li>
                            <li>4 шт. - W NATURE</li>
                        </ol>
                    </div>
                </div>
                <div class="ye highlight inline">1000y.e</div>
            </div>
        </div>
        <p><span class="highlight">ПАКЕТЫ</span> отличаются между собой не только стоимостью, объёмом приобретаемой продукции,
        но и финансовыми возможностями в бизнес-плане!
        Для того, чтобы повысить свои финансовые возможности,
        Вы можете перейти на более высокий по статусу пакет,
        оплатив разницу между ранее приобретенным пакетом, и тем, на который Вы хотите перейти.
        Срок для перехода (апгрейда) — 3 МЕСЯЦА с момента регистрации в компании.</p>
        <h3>БИЗНЕС-ПЛАН ИМЕЕТ <span class="highlight">7 ВИДОВ</span> БОНУСОВ:</h3>
        <br>
        <br>
        <br>
        <h4><span class="highlightRed" style="color: white;">1 &nbsp;&nbsp; КЛИЕНТСКИЙ</span></h4>
        <h4 style="marign-top: 1rem; font-size: 2.5rem;">&nbsp;&nbsp;БОНУС</h4>
        <p>Клиент покупает продукцию компании в вашем интернет-магазине по той же цене, что и партнеры
        (единая цена для всех - и для партнеров, и для клиентов).
        Партнер получает 40% от всех покупок в вашем интернет-магазине, который привязан к вашему
        номеру ID посредством реферальной ссылки. <br>
        <br>

        ПРИМЕР: Ваш клиент приобрел в вашем интернет-магазине продукт на сумму 100 у.е. Вам начисляется
        100 у.е. х 40% = 40 у.е. Это Ваш бонус.
        Ваш клиент приобрел в вашем интернет-магазине продукт на сумму 500 у.е.
        Вам начисляется 500 у.е. х 40% = 200 у.е. ваш бонус. <br>

        Условие получения клиентского бонуса - активность - 40 баллов в прошлом месяце.
        <br><br>
        </p>
        <h4><span class="highlight" style="color: white; margin-left: -2.5%;font-size: 2.5rem;">2 &nbsp;&nbsp; БОНУС ЗА ЛИЧНОЕ</span></h4>
        <h4 style="marign-top: 1rem; font-size: 2.5rem;">&nbsp;&nbsp;ПРИГЛАШЕНИЕ</h4>
        <p>По вашей рекомендации партнер приобретает пакет: </p>
        <br><br>


        <h4><span class="highlightBlue" style="color: white; margin-left: -2.5%;font-size: 2.5rem;">3 &nbsp;&nbsp; БИНАРНЫЙ СТЕПОВЫЙ</span></h4>
        <h4 style="marign-top: 1rem; font-size: 2.5rem;">&nbsp;&nbsp;БОНУС</h4>
        <p>Для создания бизнес-структуры и получения права на все последующие бонусы<br>
        Вам необходимо подключить 2-х партнеров на любой из пакетов:<br>
        один — в левую ветку,<br>
        второй — в правую ветку.<br>
        В бинарной структуре участвуют все бизнес-пакеты.<br>
        Товарооборот рассчитывается в баллах:</p>
        <div class="imgBonus"></div>
        <p>
            Необходимый товарооборот для закрытия степа — 400 баллов: 200 баллов слева и 200 баллов справа <br>
            Вам выплачиваются комиссионные в размере: 20 у.е; 30 у.е; 40 у.е; 45 у.е; 50 у.е; 55 у.е; 60 у.е.<br>
            (в зависимости от того, на каком квалификационном ранге Вы находитесь).<br>
            Расчет за каждый закрытый степ происходит онлайн (мгновенно).<br>
            <span style="color: red">ВАЖНО</span> помнить условие для получения степовых бонусов:<br>
            Ваша ежемесячная активность минимум на 40 баллов + КВАЛИФИКАЦИЯ:
        </p>
        <div class="tableImg">
            <img src="public/img/photo/table.png" alt="" style="width: 50%; margin-left: 25%; margin-top: 2rem; margin-bottom: 2rem;">
        </div>

        <span class="highlight" style="font-size: 1.6rem;">МЕНЕДЖЕР</span> <br><br>
        - 20 у.е. за каждый закрытый степ. <br>
        Условия: личное подключение 2-х активных партнеров на пакет Start и выше, одного — <br>
        в левую ветку, второго — в правую ветку. <br>
        Активным партнер считается, если сумма его заказов за прошлый месяц составила 40 баллов и более. <br><br>
        <span class="highlight">Максимальная выплата в неделю - 500 у.е.</span> <br> <br>


        <span class="highlight" style="font-size: 1.6rem;">ДИРЕКТОР</span> <br><br>
        - 30 у.е. за каждый закрытый степ. <br>
        Условия: двое из лично приглашенных партнеров имеют ранг МЕНЕДЖЕР: один — <br>
        в левой ветке, один — в правой ветке. <br><br>
        <span class="highlight">Максимальная выплата в неделю - <span style="color: red;">1000 у.е.</span></span> <br> <br>
        
        
        <span class="highlight" style="font-size: 1.6rem;">РЕГИОНАЛЬНЫЙ ДИРЕКТОР</span> <br><br>
        - 40 у.е. за каждый закрытый степ. <br>
        Условия: четверо из лично приглашенных партнеров имеют ранг МЕНЕДЖЕР: двое из них — <br>
        в левой ветке, двое — в правой ветке. <br><br>
        <span class="highlight">Максимальная выплата в неделю - <span style="color: red;">3000 у.е.</span></span> <br> <br>



        <span class="highlight" style="font-size: 1.6rem;">ФЕДЕРАЛЬНЫЙ ДИРЕКТОР</span> <br><br>
        - 45 у.е. за каждый закрытый степ. <br>
        Условия: восемь из лично приглашенных партнеров имеют ранг МЕНЕДЖЕР: четверо из них — <br>
        в левой ветке, четверо - в правой ветке. <br>
        Плюс закрытых 125 степов за прошлый месяц. <br><br>
        <span class="highlight">Максимальная выплата в неделю - <span style="color: red;">5000 у.е.</span></span> <br> <br>
        

        <span class="highlight" style="font-size: 1.6rem;">МЕЖДУНАРОДНЫЙ ДИРЕКТОР</span> <br><br>
        - 50 у.е. за каждый закрытый степ. <br>
        Условия: восемь из лично приглашенных партнеров имеют ранг МЕНЕДЖЕР: пять из них — <br>
        в левой ветке, пять - в правой ветке. <br>
        Плюс закрытых 250 степов за прошлый месяц. <br><br>
        <span class="highlight">Максимальная выплата в неделю - <span style="color: red;">7000 у.е.</span></span> <br> <br>
        
        <span class="highlight" style="font-size: 1.6rem;">СОВЕТНИК 1-ГО РАНГА</span> <br><br>
        - 55 у.е. за каждый закрытый степ. <br>
        Условия: восемь из лично приглашенных партнеров имеют ранг МЕНЕДЖЕР: пять из них — <br>
        в левой ветке, пять - в правой ветке. <br>
        Плюс двое из лично приглашенных партнеров имеют ранг МЕЖДУНАРОДНЫЙ ДИРЕКТОР : один из них <br>
        — в левой ветке, второй — в правой ветке. <br>
        Плюс закрытых 500 степов за прошлый месяц. <br><br>
        <span class="highlight">Максимальная выплата в неделю - <span style="color: red;">8000 у.е.</span></span> <br> <br>

        <span class="highlight" style="font-size: 1.6rem;">СОВЕТНИК 2-ГО РАНГА</span> <br><br>
        - 55 у.е. за каждый закрытый степ. <br>
        Условия: восемь из лично приглашенных партнеров имеют ранг МЕНЕДЖЕР: пять из них — <br>
        в левой ветке, пять - в правой ветке. <br>
        Плюс трое из лично приглашенных партнеров имеют ранг МЕЖДУНАРОДНЫЙ ДИРЕКТОР : один из них <br>
        — в левой ветке, двое — в правой ветке (или в зеркальном отображении). <br>
        Плюс закрытых 750 степов за прошлый месяц. <br><br>
        <span class="highlight">Максимальная выплата в неделю - <span style="color: red;">9000 у.е.</span></span> <br> <br>
        

        <span class="highlight" style="font-size: 1.6rem;">СОВЕТНИК 3-ГО РАНГА</span> <br><br>
        - 55 у.е. за каждый закрытый степ. <br>
        Условия: восемь из лично приглашенных партнеров имеют ранг МЕНЕДЖЕР: пять из них — <br>
        в левой ветке, пять - в правой ветке. <br>
        Плюс четверо из лично приглашенных партнеров имеют ранг МЕЖДУНАРОДНЫЙ ДИРЕКТОР : двое из <br>
        них — в левой ветке, двое — в правой ветке. <br>
        Плюс закрытых 1000 степов за прошлый месяц. <br><br>
        <span class="highlight">Максимальная выплата в неделю - <span style="color: red;">10000 у.е.</span></span> <br> <br>
        
        <span class="highlight" style="font-size: 1.6rem;">ЧЛЕН СОВЕТА ПРАВЛЕНИЯ</span> <br><br>
        - 60 у.е. за каждый закрытый степ. <br>
        Условия: восемь из лично приглашенных партнеров имеют ранг МЕНЕДЖЕР: пять из них — <br>
        в левой ветке, пять - в правой ветке. <br>
        Плюс двое из лично приглашенных партнеров имеют ранг СОВЕТНИК 3-го ранга: один из них — <br>
        в левой ветке, второй — в правой ветке. <br>
        Плюс закрытых 2000 степов за прошлый месяц. <br><br>
        <span class="highlight">Максимальная выплата в неделю - без ограничений.</span> <br> <br>
        
        <h4><span class="highlightRed" style="color: white;">4 &nbsp;&nbsp; ЛИДЕРСКИЙ</span></h4>
        <h4 style="marign-top: 1rem; font-size: 2.5rem;">&nbsp;&nbsp;БОНУС</h4>



        
        <p>Партнер (Вы) получаете <span style="color: red; font-size: 2rem;">%</span> от доходов бинарно-степового бонуса партнеров вашего 1,2,3,4 уровня. <br>
        Данный бонус мотивирует наставников обучать и оказывать поддержку партнерам <br>
        своей структуры. <br>
        При расчете данного бонуса учитывается Ваша квалификация! <br>
        </p>
        <div class="tableNew" style="margin-bottom: 2rem;">
            <img src="public/img/photo/tableNew.png" alt="" style="width:100%;">
        </div>


        <span class="highlight">ВРЕМЕННЫЙ БОНУС РАНГ!</span>

        <p>Партнер при входе в бизнес на пакет <span style="color: red;">"STANDART"</span> получает на 180 дней временный ранг <br>
        "<span style="color: blue;">РЕГИОНАЛЬНЫЙ ДИРЕКТОР</span>"*</span> (дополнительная возможность сразу получать за степы по 40 у.е. и 10% <br>
            лидерский бонус).
        </p>
        <p>Партнер при входе в бизнес на пакет <span style="color: red;">"PROFESSIONAL"</span> получает на 180 дней временный ранг  <br>
        "<span style="color: blue;">ФЕДЕРАЛЬНЫЙ ДИРЕКТОР</span>"*(дополнительная возможность сразу получать за степы по 45 у.е. и 15% и  <br>
            10% лидерский бонус). <br>
            *При выполнении квалификации "МЕНЕДЖЕР»
        </p>


        <h4><span class="highlightOcean" style="color: white;">5 &nbsp;&nbsp; РАНГОВЫЙ</span></h4>
        <h4 style="marign-top: 1rem; font-size: 2.5rem;">&nbsp;&nbsp;БОНУС</h4>

        <p>Выплачивается один раз за достижение квалификационного ранга</p>
        
        <p><span class="highlight">ФЕДЕРАЛЬНЫЙ ДИРЕКТОР</span> - <span style="color: red;">5000у.е.</span><br>
        Условия: выполнить квалификацию «федеральный директор» <br>
        и продержать ее 3 месяца </p>

        <p><span class="highlight">МЕЖДУНАРОДНЫЙ ДИРЕКТОР</span> - <span style="color: red;">10000у.е.</span> <br>
            Условия: выполнить квалификацию «международный директор» <br>
            <span class="highlight">и продержать ее 3 месяца</span>
        </p>
        <p>
            СОВЕТНИК 1-ГО РАНГА - <span style="color: red;">20000у.е.</span> <br>
            <span class="highlight">Условия: выполнить квалификацию</span> «советник 1-го ранга» <br>
            и продержать ее 3 месяца </p>
        <p>
            <span class="highlight">СОВЕТНИК 2-ГО РАНГА</span> - <span style="color: red;">30000у.е.</span> <br>
            Условия: выполнить квалификацию «советник 2-го ранга» <br>
            и продержать ее 3 месяца </p>
        <p>

            <span class="highlight">СОВЕТНИК 3-ГО РАНГА</span> - <span style="color: red;">40000у.е.</span> <br>
            Условия: выполнить квалификацию «советник 3-го ранга» <br>
            и продержать ее 3 месяца </p>
            ЧЛЕН СОВЕТА ПРАВЛЕНИЯ - <span style="color: red;">50000у.е.</span>
        <p>
        Условия: выполнить квалификацию «член совета правления» <br>
        и продержать ее 3 месяца</p>

        <br><br>
        <h4><span class="highlightRed" style="color: white;">6 &nbsp;&nbsp; АВТО</span></h4>
        <h4 style="marign-top: 1rem; font-size: 2.5rem;">&nbsp;&nbsp;БОНУС</h4>


        <div style="height: 100%;  width: 115%; margin-left: -7.5%; background: rgb(67, 66, 66); clip-path: polygon(0 5%, 100% 0, 100% 95%, 0 100%);">
    
            <style>
                .mers1 {
                    background: url('public/img/photo/1.png');
                    background-size: cover;
                    background-position: center center;
                }
                .mers2 {
                    background: url('public/img/photo/1.png');
                    background-size: cover;
                    background-position: center center;
                }
                .mers3 {
                    background: url('public/img/photo/3.png');
                    background-size: cover;
                    background-position: center center;
                }
                .mers4 {
                    background: url('public/img/photo/4.png');
                    background-size: cover;
                    background-position: center center;
                }
            </style>
            <div style="clip-path: polygon(0 10%, 100% 0, 100% 90%, 0 100%); height: 50vh;" class="flex row">
                <div class="W50 mers1"></div>
                <div class="W50" style="padding-left: 8rem;">
                    <p style="margin-top: 11vh; color: white; font-size: 2.5rem;">MERCEDES-BENZ</p>
                    <br>
                    <span class="highlight" style="font-size: 2.5rem; color: white;">A CLASSE</span>
                <br>
                <br>
                <br>
                <br>
                <p style="color: white;">
                    Условия: выполнить квалификацию <br>
                    «советник 1-го ранга» и продержать ее <br>
                    3 месяца
                </p>
            </div>
            </div>
            <div style="clip-path: polygon(0 10%, 100% 0, 100% 90%, 0 100%); height: 50vh; margin-top: -5vh;" class="flex row">
                <div class="W50" style="padding-left: 8rem;">
                    <p style="margin-top: 11vh; color: white; font-size: 2.5rem;">MERCEDES-BENZ</p>
                        <br>
                        <span class="highlight" style="font-size: 2.5rem; color: white;">C CLASSE</span>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p style="color: white;">
                        Условия: выполнить квалификацию <br> 
                        «советник 2-го ранга» и продержать ее <br>
                        3 месяца
                    </p>
                </div>
                <div class="W50 mers2"></div>
            </div>
            <div style="clip-path: polygon(0 10%, 100% 0, 100% 90%, 0 100%); height: 50vh; margin-top: -5vh;" class="flex row">
                <div class="W50 mers3"></div>
                <div class="W50" style="padding-left: 8rem;">
                    <p style="margin-top: 11vh; color: white; font-size: 2.5rem;">MERCEDES-BENZ</p>
                    <br>
                    <span class="highlight" style="font-size: 2.5rem; color: white;">E CLASSE</span>
                <br>
                <br>
                <br>
                <br>
                <p style="color: white;">
                    Условия: выполнить квалификацию <br>
                    «советник 3-го ранга» и продержать ее <br>
                    3 месяца
                </p>
            </div>
            </div>
            <div style="clip-path: polygon(0 10%, 100% 0, 100% 90%, 0 100%); height: 50vh; margin-top: -5vh;" class="flex row">
                <div class="W50" style="padding-left: 8rem;">
                    <p style="margin-top: 11vh; color: white; font-size: 2.5rem;">MERCEDES-BENZ</p>
                        <br>
                        <span class="highlight" style="font-size: 2.5rem; color: white;">S CLASSE</span>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p style="color: white;">
                        Условия: выполнить квалификацию <br>
                        «член совета правления» и продержать ее <br>
                        3 месяца
                    </p>
                </div>
                <div class="W50 mers4"></div>
            </div>
    
        </div>

        <br>
        <br>
        <br>
        <br>
        <h4><span class="highlight" style="color: white; font-size: 2.5rem;">7 &nbsp;&nbsp; Глобавльный</span></h4>
        <h4 style="marign-top: 1rem; font-size: 2.5rem;">&nbsp;&nbsp;БОНУС</h4>


        <p>Компания выделяет 3% со всего товарооборота и делит их между партнерами в квалификациях: <br>
        Советник - 2% и Член совета правления -1%. <br>
        Бонус рассчитывается ежемесячно, выплачивается раз в полгода.</p>


        <br>
        <br>
        <br>
        <h4><span class="highlightRed" style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp; ОБРАТИТЕ</span></h4>
        <h4 style="marign-top: 1rem; font-size: 2.5rem;">&nbsp;&nbsp;ВНИМАНИЕ!</h4>
        <br><br>
        <p>
        <ol>
            <li>В случае, если в Вашей структуре еще никого нет ни в левой, ни в правой ноге, Ваш первый 
        лично приглашенный встанет в левую ногу! В случае, если в левой ноге уже кто- то есть (не важно
        - лично приглашенный это или нет), а в правой ноге никого нет, то лично приглашенный встанет в
        правую ногу. В случае, если в обеих ногах на первом уровне уже кто-то есть, то лично
        приглашенный пойдет в ту ногу, которую Вы указали. Далее Вы регулируете постановку
        партнеров самостоятельно с помощью перемещения стрелки. Для этого нужно зайти в
        «Настройки» и изменить местоположение стрелки.</li>
        <li>Предрегистрация ставит Вашего нового партнера в общий накопительный список. В какую
        «ногу» он встанет, определяется в момент оплаты. Поэтому перед его оплатой внимательно
        проверьте расположение стрелки в своем кабинете.</li>
        <li>Партнеры, попадающие в Вашу структуру "переливом", т.е. от вышестоящих по структуре, всегда
        попадают в правую ногу.</li>
        <li>Квалификация требуется для получения всех видов бонусов, кроме БОНУСА ОНЛАЙН (бонус за
        личную рекомендацию) и бонуса товарооборота страницы.</li>
        <li>Квалификация определяется в начале каждого месяца автоматически и действует весь месяц.
        Исключение составляют только те партнеры, которые выполняют условия новой квалификации в
        течение первых 30 дней после вступления в партнеры IMAGINE PEOPLE - у них квалификация
        присваивается автоматически, как только они выполняют ее условия.</li>
        <li>Квалификация может быть обновлена моментально, если партнер сделает личную активность в
        текущем месяце 80 баллов и более, при условии наличия по одному активному партнеру (в
        текущем или прошлом месяце) в каждой его ветке.</li>
        </ol>
        </p>
    
      </div>      
      <?php require_once 'footer.php'; ?>


    
    </body>
</html>

