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
            max-width: 15vw;
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
            padding-right: 35vh!important; 
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
      </style>
    </head>
    <body>
      <?php require_once 'header.php'; ?>
      <div class="one headerAllpage" style="background-image: url('public/img/photo/products.png'); background-size: contain; background-repeat: no-repeat;">
            <h1 class="TAcenter" style="padding-top: 20vh; color: white; font-size: 5rem;">ПРОДУКТЫ КОМПАНИИ</h1>
      </div>
      <div class="counter" style="height: 125vh;">
        <div class="country">Сортировка по:</div>
        <div class="flex row cartsX" style="margin-top: -15vh;">
            <div class="W30 TAcenter cartX">
                <img src="public/img/photo/prod2.png" alt="" class="imgProd">
                <p class="pDes">Water for Life</p>
                <span class="pPrice">14000тг</span>
            </div>
            <div class="W30 TAcenter cartX">
                <img src="public/img/photo/prod2.png" alt="" class="imgProd">
                <p class="pDes">Absolute Energy</p>
                <span class="pPrice">28000тг</span>
            </div>
        </div>
        <div class="flex row cartsX" style="margin-top: -15vh;">
            <div class="W25 TAcenter cartX">
                <img src="public/img/photo/prod2.png" alt="" class="imgProd">
                <p class="pDes">Water for Life</p>
                <span class="pPrice">14000тг</span>
            </div>
            <div class="W25 TAcenter cartX">
                <img src="public/img/photo/prod2.png" alt="" class="imgProd">
                <p class="pDes">Absolute Energy</p>
                <span class="pPrice">28000тг</span>
            </div>
        </div>
            <a href="#" style="left: 30%; top: 0;" class="linkBtn">Смотреть еще</a>
        <div class="nav">
            <h3>Категории</h3>
            <ul>
                <li>> Water for Life</li>
                <li>> LifePOWER</li>
                <li>> LifeFOOD</li>
                <li>> Fullerene</li>
                <li>> средства защиты</li>
            </ul>
            <h3>Поиск по продуктам</h3>
            <input type="text" class="inpSearch" value="Введите...">
        </div>
            
      </div>


      <?php require_once 'footer.php'; ?>
    
    </body>
</html>

