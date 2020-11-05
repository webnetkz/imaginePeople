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
            <h1 class="TAcenter" style="padding-top: 20vh; color: white; font-size: 5rem;">О КОМПАНИИ</h1>
      </div>
      <div class="content">
        <div class="H100">
            <img src="public/img/photo/about.jpeg" alt="" style="width: 90%;">
            <br><br>
            <p>В современном мире мощных информационных технологий у людей появилась возможность составлять свое расписание с максимальной продуктивностью, устанавливая гармоничный баланс между временем и своим рабочим потенциалом. Однако достижение поставленных целей и успешное решение сложных задач могут оказаться под угрозой вследствие утомленности, усталости, изможденности человеческого организма. 

</p>
<br>
<p>Бесконечные антропогенные воздействия человека в конечном итоге формируют неблагоприятную окружающую среду. В настоящее время человеку приходится прикладывать все больше усилий для поддержания своего организма в тонусе. Тем не менее, наука не стоит на месте. Благодаря новейшим исследованиям в области биофизики и биомедицины удалось обнаружить дополнительный энергоресурс – гидроплазму! При добавлении небольшого количества концентрата гидроплазмы в обычную питьевую воду происходит удивительнейшее преобразование последней, а именно - патогенная («мертвая») вода становится биогенной («живой»). Воздействие биогенной воды на организм уникально: ускоряются процессы метаболизма и вывода шлаков и токсинов, замедляются процессы старения, повышается нейроэмоциональная устойчивость. Как следствие, иммунная система человека в результате такой мощной энергостимуляции становится выносливее и сильнее в разы!
</p>
<br>
<p>Люди, их здоровье и благосостояние – важнейшие вещи на Земле! Международная интернет-компания «IMAGINE PEOPLE» считает своим основным предназначением улучшение качества жизни людей по всему миру. Именно поэтому наша компания предоставляет партнерам эксклюзивную возможность приобретения исключительной и не имеющей аналогов продукции! 

</p>   
<br>  
<p>Кроме того, особенности структуры «IMAGINE PEOPLE» позволяют каждому партнёру компании построить успешный бизнес и развивать его с целью получения стабильного дохода.

</p> 
<br>  
<p>Сплочённая команда «IMAGINE PEOPLE» - это квалифицированные специалисты, на протяжении многих лет углублённо изучавшие принципы организации и методы оптимизации системы сетевого маркетинга. Детально проанализировав ситуацию на современном рынке, а также ознакомившись с новейшими исследованиями в области биофизики и биомедицины, компания «IMAGINE PEOPLE» подготовила эксклюзивное товарное предложение. Важно помнить, что продукция «IMAGINE PEOPLE» является интеллектуальной собственностью компании. 

</p>
<br>
      <p>Приоритетными направлениями для развития компания выбрала продукт «Water for life» - специальная вода для поддержания общего тонуса и поднятия иммунитета, а также функциональное и спортивное питание. 

</p>  
<br>
<p>Производство уникальной продукции «IMAGINE PEOPLE» происходит с использованием современного оборудования при соблюдении европейских стандартов. На данный момент компания «IMAGINE PEOPLE» прибегает к услугам отдельных производителей, но при условии стабильно растущего потребительского спроса на продукцию компания планирует развернуть своё собственное производство для обеспечения высокого качества производимого продукта в необходимых объёмах. 

</p>     
<br>
<p>Цель компании «IMAGINE PEOPLE» – предоставить людям во всём мире исключительную возможность пользоваться высококачественным продуктом, а также стать успешными интернет-предпринимателями и владельцами высокодоходного бизнеса!

</p>   
<br>
<p>Задача компании «IMAGINE PEOPLE» – создать многомиллионную международную сеть потребителей продукции компании в десятках стран мира посредством глобальной сети Интернет!

</p>
<br>
<p>Становясь партнером компании, вы получаете доступ к безграничным ресурсам для личностного развития! Множество людей по всему миру уже изменили свою жизнь к лучшему вместе с «IMAGINE PEOPLE»!

</p>
<br> 
<p>«IMAGINE PEOPLE» - сохраняя самое ценное!

</p>
<br><br>
<img src="public/img/photo/about2.png" alt="" style="width: 15%;">
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

