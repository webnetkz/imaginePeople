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
        .yel {
            background: #FFFF24;
            color: black;
        }
        .bur {
            background: #00FFFF;
            color: white;
        }
        .Elems:hover {
            padding: 1px;
            padding-left: 30px;
            background: rgb(250, 250, 250);
        }
        p {
            color: rgb(63, 63, 65);
            text-shadow: none;
            padding: 5px;
            margin: 10px;
            font-size: 1rem;
        }
        h3 {
            color: rgb(75, 75, 77);
            text-shadow: none;
            margin: 1rem;
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
            height: 100%!important;
        }
        .counter > div {
            padding: 1vh!important;
        }
        .one {
                background-image: url('public/img/photo/bgContacts.jpg')!important;
                background-size: cover!important;
                background-repeat: no-repeat;
            height: 60vh;
        }
        @media screen and (max-device-width: 900px) {
            .Elems > p {
                color: rgb(75, 75, 77);
                width: 100%;
            }
            .counter > div {
                margin-top: 0vh!important;
                height: 100%!important;
                padding: 1vh 2vw!important;
            }
            .counter {
                overflow-x: hidden!important;
                margin-top: 0vh!important;
                margin-bottom: 0vh!important;
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
            p {
                width: 200%!important
            }
            .W100 {
                width: 100%!important
            }
        }
      </style>
    </head>
    <body style="overflow: hidden;">
      <?php require_once 'header.php'; ?>
      <div class="one headerAllpage" style="background-image: url('public/img/photo/news.jpg'); background-size: contain; background-repeat: no-repeat;">
            <h1 class="TAcenter" style="padding-top: 20vh; height: 130vh; color: white; font-size: 5rem;">НОВОСТИ КОМПАНИИ</h1>
      </div>
      <div class="counter" style="padding-left: 10vw; height: 100%; padding-top: 11vh; overflow: scroll;">
        <h3 class="TAcenter">Представляем Вам команду Центрального офиса.</h3>
        <h3 class="TAcenter">Вы можете напрямую обратиться к нашим сотрудникам по интересующим Вас вопросам.</h3>
        <div class="flex row colM W100">
            <div class="flex col W50" style="padding: 1rem;">
                <p class="yel">WhatsApp</p>
                <p>+7 727 364 53 30</p>
                <p class="bur">Служба поддержки</p>
                <p>+7 727 364 53 30</p>
                <p class="yel">Бехгалтерия</p>
                <p>buh@ip-one.net</p>
            </div>
            <div class="flex col W50" style="padding: 2rem;">
                <p class="bur">Техническая поддержка</p>
                <p>+7 747 425 22 95</p>
                <p class="yel">Сервис обратной связи</p>
                <p>feedback@ip-one.net</p>
            </div>
        </div>
        <div class="W100 imgCont" style="padding: 1rem;background: url('public/img/photo/contactsImg.jpg'); height: 11rem; background-size: cover;">
            <p style="position: relative; color: white; marign: 0;z-index: 999; text-align: right; font-size: 1.2rem;text-shadow: 0 0 5px black;">Собраться вместе есть начало</p>
            <p style="position: relative; color: white; marign: 0;z-index: 999; text-align: right; font-size: 1.2rem;text-shadow: 0 0 5px black;">Держаться вместе есть прогресс</p>
            <p style="position: relative; color: white; marign: 0;z-index: 999; text-align: right; font-size: 1.2rem;text-shadow: 0 0 5px black;">Работать вместе есть успех</p>
        </div>
        <p class="bur W100">Отдел по работе с show-room</p>
        <div class="flex row colM W100">
            <div class="flex col W50" style="padding: 2rem;">
                <p class="yel">Хон Анатолий</p>
                <p>+7 707 245 93 09</p>
                <p>manager2@ip-one.net</p>
                <p class="yel">Музарапов Азиз</p>
                <p>+7 775 744 74 46</p>
                <p>manager4@ip-one.net</p>
                <p class="bur">Отдел по работе с регионами</p>
                <p style="color: black;">Умбетьярова Гульмира</p>
                <p>+7 775 824 44 17</p>
                <p>none@ip-one.net</p>
                <p class="yel">Информационный отдел</p>
                <p style="color: black;">Медеум Алима</p>
                <p>+7 747 157 75 94</p>
                <p>info@ip-one.net</p>
                <p class="bur">Отдел логистики</p>
                <p style="color: black;">Ким Дмитрий</p>
                <p>post@ip-one.net</p>
            </div>
            <div class="flex col W50" style="padding: 2rem;">
                <p class="yel">Камза Карина</p>
                <p>+7 747 425 22 95</p>
                <p>manager1@ip-one.net</p>
                <br>
                <br>
                <br>
                <p class="yel">Отдел маркетинга</p>
                <p style="color: black;">Жалиева Саида</p>
                <p>+7 747 855 30 74</p>
                <p>none@ip-one.net</p>
                <p class="bur">Отдел дизайна</p>
                <p style="color: black;">Крюков Дмитрий</p>
                <p style="color: black;">+7 747 855 30 74</p>
                <p>disign@ip-one.net</p>
                <p class="yel">Директор</p>
                <p style="color: black;">Молдобаева Эльмира</p>
                <p>dir@ip-one.net</p>
            </div>
        </div>
      </div>


      <?php require_once 'footer.php'; ?>
    
    </body>
</html>

