<!DOCTYPE html>
<html lang="en">
    <head>
      <title>IP</title>
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
      </style>
    </head>
    <body>
      <?php require_once 'header.php'; ?>
      <div class="one">
        <div class="slider1">
          <h2>ПОЧУВСТВУЙ</h2>
          <h3>СИЛУ ПРИРОДЫ</h3>
          <p>
              достаточно добавить несколько капель Water for Life
              в обычную питьевую воду, и вода станет биогенной,
              то есть живой.
          </p>
          <a href="#" class="linkBtn">ПОДРОБНЕЕ</a>
          <div class="paginationSlider VAmiddle">
              <span class="pagination activePagination" onclick="slide1()">⬤</span>
              <span class="pagination" onclick="slide2()">⬤</span>
              <span class="pagination" onclick="slide3()">⬤</span>
          </div>
          <img src="public/img/photo/water1.webp" alt="imagine people" class="imgSlider1">
      </div>
      </div>

      <div class="two">
        <div class="slider1">
          <h2>ПОЧУВСТВУЙ2</h2>
          <h3>СИЛУ ПРИРОДЫ2</h3>
          <p>
              достаточно добавить несколько капель Water for Life
              в обычную питьевую воду, и вода станет биогенной,
              то есть живой.
          </p>
          <a href="#" class="linkBtn">ПОДРОБНЕЕ</a>
          <div class="paginationSlider VAmiddle">
            <span class="pagination" onclick="slide1()">⬤</span>
            <span class="pagination activePagination" onclick="slide2()">⬤</span>
            <span class="pagination" onclick="slide3()">⬤</span>
          </div>
          <img src="public/img/photo/water1.webp" alt="imagine people" class="imgSlider1">
      </div>
      </div>

      <div class="three">
        <div class="slider1">
          <h2>ПОЧУВСТВУЙ3</h2>
          <h3>СИЛУ ПРИРОДЫ3</h3>
          <p>
              достаточно добавить несколько капель Water for Life
              в обычную питьевую воду, и вода станет биогенной,
              то есть живой.
          </p>
          <a href="#" class="linkBtn">ПОДРОБНЕЕ</a>
          <div class="paginationSlider VAmiddle">
            <span class="pagination" onclick="slide1()">⬤</span>
            <span class="pagination" onclick="slide2()">⬤</span>
            <span class="pagination activePagination" onclick="slide3()">⬤</span>
          </div>
          <img src="public/img/photo/water1.webp" alt="imagine people" class="imgSlider1">
      </div>
      </div>

      <script>
        let pagns = document.querySelectorAll('.pagination');

        console.log(pagns);

        function slide1() {
          document.querySelector('.one').style.display = 'block';
          document.querySelector('.two').style.display = 'none';
          document.querySelector('.three').style.display = 'none';
        }
        function slide2() {
          document.querySelector('.two').style.display = 'block';
          document.querySelector('.one').style.display = 'none';
          document.querySelector('.three').style.display = 'none';
        }
        function slide3() {
          document.querySelector('.three').style.display = 'block';
          document.querySelector('.one').style.display = 'none';
          document.querySelector('.two').style.display = 'none';
        }

        setTimeout(() => {
          slide2();
        }, 7000);
        setTimeout(() => {
          slide3();
        }, 14000);
        setTimeout(() => {
          slide1();
        }, 21000);

      </script>

      <div class="counter flex row">
        <div class="flex col W50 H100" style="">
          <div class="flex H30 M10p">
            <img src="public/img/icons/user.png" alt="" class="W25" style="margin-right: 40px;">
            <span data-num="7300" style="font-size: 5rem; font-weight: 500; color: rgb(26, 133, 199);">
              0
            </span>
            <br>
            <span style="font-size: 1.2rem; color: rgb(75, 75, 77); font-weight: 900;" class="textCounter">ПАРТНЕРОВ ПО ВСЕМУ МИРУ</span>
          </div>
          <div class="flex H30 M10p">
            <img src="public/img/icons/home.png" alt=""  class="W25" style="margin-right: 40px;">
            <span data-num="182" style="font-size: 5rem; font-weight: 500; color: rgb(26, 133, 199);">
              0
            </span>
            <br>
            <span style="font-size: 1.2rem; color: rgb(75, 75, 77); font-weight: 900;" class="textCounter">SHOW ROOMS</span>
          </div>
          <div class="flex H30 M10p">
            <img src="public/img/icons/net.png" alt="" class="W25" style="margin-right: 40px;">
            <span data-num="3" style="font-size: 5rem; font-weight: 500; color: rgb(26, 133, 199);">
              0
            </span>
            <br>
            <span style="font-size: 1.2rem; color: rgb(75, 75, 77); font-weight: 900;" class="textCounter">ПРЕДСТАВИТЕЛЬСТВ ПО ВСЕМУ МИРУ</span>
          </div>
        </div>
        <div class="flex col W50 H100" style="background: rgba(0, 0, 0, 0.1); color: rgb(75, 75, 77); padding: 7% 3%;">
          <div>
            <h2 class="" style="padding-left: 30px; font-weight: 900">ОТКРОЙ ДЛЯ СЕБЯ</h2>
            <h1 class="" style="font-size: 4rem; font-weight: 900">IMAGINE PEOPLE</h1>
          </div>
          <div class="flex row counterTwoDivImg">
            <div class="TAcenter">
              <img src="public/img/icons/heart.png" alt="" class="W50">
              <span class="block" style="font-weight: 900; font-size: 1.4rem">ЗДОРОВЬЕ</span>
            </div>
            <div class="TAcenter">
              <img src="public/img/icons/handshake.png" alt="" class="W50">
              <span class="block" style="font-weight: 900; font-size: 1.4rem">БИЗНЕС</span>
            </div>            
            <div class="TAcenter">
              <img src="public/img/icons/money.png" alt="" class="W50">
              <span class="block" style="font-weight: 900; font-size: 1.4rem">ДОХОД</span>
            </div>
          </div>
        </div>
      </div>
      <div class="products TAcenter">
        <h1 style="color: white; font-size: 3rem; font-weight: 900; margin-top: 15vh; text-shadow: 0 0 15px black;">НАШИ ПРОДУКТЫ</h1>
        <div class="flex row aroundJC carusel">

          <span class="arrow" onclick="backCarusel()"><</span>

          <div class="flex col cartProduct">
            <div style="background: url('public/img/photo/cartBg.webp'); background-size: cover;">
              <img src="public/img/photo/prod1.png" alt="" class="imgProd">
            </div>
            <div style="padding: 0 30px;" class="flex col aroundJC">
              <p>G-Bio0</p>
              <span>достаточно добавить несколько капель
              water for life в обычную питьевую
              воду, и вода станет биогенной,
              то есть живой. </span>
              <a href="#" class="linkBtnX">ПОДРОБНЕЕ</a>
            </div>
          </div>
          <div class="flex col cartProduct">
            <div style="background: url('public/img/photo/cartBg.webp'); background-size: cover;">
              <img src="public/img/photo/prod1.png" alt="" class="imgProd">
            </div> 
            <div style="padding: 0 30px;" class="flex col aroundJC">
              <p>G-Bio1</p>
              <span>достаточно добавить несколько капель
              water for life в обычную питьевую
              воду, и вода станет биогенной,
              то есть живой. </span>
              <a href="#" class="linkBtnX">ПОДРОБНЕЕ</a>
            </div>      
          </div>
          <div class="flex col cartProduct">
            <div style="background: url('public/img/photo/cartBg.webp'); background-size: cover;">
              <img src="public/img/photo/prod1.png" alt="" class="imgProd">
            </div>
            <div style="padding: 0 30px;" class="flex col aroundJC">
              <p>G-Bio2</p>
              <span>достаточно добавить несколько капель
              water for life в обычную питьевую
              воду, и вода станет биогенной,
              то есть живой. </span>
              <a href="#" class="linkBtnX">ПОДРОБНЕЕ</a>
            </div>
          </div>
          <div class="flex col cartProduct">
            <div style="background: url('public/img/photo/cartBg.webp'); background-size: cover;">
              <img src="public/img/photo/prod1.png" alt="" class="imgProd">
            </div>
            <div style="padding: 0 30px;" class="flex col aroundJC">
              <p>G-Bio3</p>
              <span>достаточно добавить несколько капель
              water for life в обычную питьевую
              воду, и вода станет биогенной,
              то есть живой. </span>
              <a href="#" class="linkBtnX">ПОДРОБНЕЕ</a>
            </div>
          </div>
          <div class="flex col cartProduct">
            <div style="background: url('public/img/photo/cartBg.webp'); background-size: cover;">
              <img src="public/img/photo/prod1.png" alt="" class="imgProd">
            </div>
            <div style="padding: 0 30px;" class="flex col aroundJC">
              <p>G-Bio4</p>
              <span>достаточно добавить несколько капель
              water for life в обычную питьевую
              воду, и вода станет биогенной,
              то есть живой. </span>
              <a href="#" class="linkBtnX">ПОДРОБНЕЕ</a>
            </div>
          </div>
          <div class="flex col cartProduct">
            <div style="background: url('public/img/photo/cartBg.webp'); background-size: cover;">
              <img src="public/img/photo/prod1.png" alt="" class="imgProd">
            </div>
            <div style="padding: 0 30px;" class="flex col aroundJC">
              <p>G-Bio5</p>
              <span>достаточно добавить несколько капель
              water for life в обычную питьевую
              воду, и вода станет биогенной,
              то есть живой. </span>
              <a href="#" class="linkBtnX">ПОДРОБНЕЕ</a>
            </div>
          </div>
          <div class="flex col cartProduct">
            <div style="background: url('public/img/photo/cartBg.webp'); background-size: cover;">
              <img src="public/img/photo/prod1.png" alt="" class="imgProd">
            </div>
            <div style="padding: 0 30px;" class="flex col aroundJC">
              <p>G-Bio6</p>
              <span>достаточно добавить несколько капель
              water for life в обычную питьевую
              воду, и вода станет биогенной,
              то есть живой. </span>
              <a href="#" class="linkBtnX">ПОДРОБНЕЕ</a>
            </div>
          </div>
          <div class="flex col cartProduct">
            <div style="background: url('public/img/photo/cartBg.webp'); background-size: cover;">
              <img src="public/img/photo/prod1.png" alt="" class="imgProd">
            </div>
            <div style="padding: 0 30px;" class="flex col aroundJC">
              <p>G-Bio7</p>
              <span>достаточно добавить несколько капель
              water for life в обычную питьевую
              воду, и вода станет биогенной,
              то есть живой. </span>
              <a href="#" class="linkBtnX">ПОДРОБНЕЕ</a>
            </div>
          </div>
          <div class="flex col cartProduct">
            <div style="background: url('public/img/photo/cartBg.webp'); background-size: cover;">
              <img src="public/img/photo/prod1.png" alt="" class="imgProd">
            </div>
            <div style="padding: 0 30px;" class="flex col aroundJC">
              <p>G-Bio8</p>
              <span>достаточно добавить несколько капель
              water for life в обычную питьевую
              воду, и вода станет биогенной,
              то есть живой. </span>
              <a href="#" class="linkBtnX">ПОДРОБНЕЕ</a>
            </div>
          </div>

          <span class="arrow" onclick="nextCarusel()">></span>

        </div>
          <div class="paginationSlider VAmiddle pag2">
              <span class="pagination" onclick="carts1(this)">⬤</span>
              <span class="pagination activePagination" onclick="carts2(this)">⬤</span>
              <span class="pagination" onclick="carts3(this)">⬤</span>
          </div>
        
        <script>
          let carts = document.querySelectorAll('.cartProduct');
          carts[0].style.display = 'none';
          carts[1].style.display = 'none';
          carts[2].style.display = 'none';
          carts[6].style.display = 'none';
          carts[7].style.display = 'none';
          carts[8].style.display = 'none';

          function backCarusel() {
            carts[0].style.display = 'block';
            carts[1].style.display = 'block';
            carts[2].style.display = 'block';
            carts[3].style.display = 'none';
            carts[4].style.display = 'none';
            carts[5].style.display = 'none';
            carts[6].style.display = 'none';
            carts[7].style.display = 'none';
            carts[8].style.display = 'none';
			  document.querySelector('.pag2 .activePagination').classList.remove('activePagination');
			  let pag2 = document.querySelectorAll('.pag2 .pagination');
			  pag2[0].classList.add('activePagination');
          }
          function nextCarusel() {
            carts[0].style.display = 'none';
            carts[1].style.display = 'none';
            carts[2].style.display = 'none';
            carts[3].style.display = 'none';
            carts[4].style.display = 'none';
            carts[5].style.display = 'none';
            carts[6].style.display = 'block';
            carts[7].style.display = 'block';
            carts[8].style.display = 'block';
			  document.querySelector('.pag2 .activePagination').classList.remove('activePagination');
			  let pag2 = document.querySelectorAll('.pag2 .pagination');
			  pag2[2].classList.add('activePagination');
          }
		  function carts1(elem) {
		  	carts[0].style.display = 'block';
            carts[1].style.display = 'block';
            carts[2].style.display = 'block';
            carts[3].style.display = 'none';
            carts[4].style.display = 'none';
            carts[5].style.display = 'none';
            carts[6].style.display = 'none';
            carts[7].style.display = 'none';
            carts[8].style.display = 'none';
			  document.querySelector('.pag2 .activePagination').classList.remove('activePagination');
			  elem.classList.add('activePagination');
		  }
					  function carts2(elem) {
		  	carts[0].style.display = 'none';
            carts[1].style.display = 'none';
            carts[2].style.display = 'none';
            carts[3].style.display = 'block';
            carts[4].style.display = 'block';
            carts[5].style.display = 'block';
            carts[6].style.display = 'none';
            carts[7].style.display = 'none';
            carts[8].style.display = 'none';
			  document.querySelector('.pag2 .activePagination').classList.remove('activePagination');
			  elem.classList.add('activePagination');
		  }
					  function carts3(elem) {
		  	carts[0].style.display = 'none';
            carts[1].style.display = 'none';
            carts[2].style.display = 'none';
            carts[3].style.display = 'none';
            carts[4].style.display = 'none';
            carts[5].style.display = 'none';
            carts[6].style.display = 'block';
            carts[7].style.display = 'block';
            carts[8].style.display = 'block';
			  document.querySelector('.pag2 .activePagination').classList.remove('activePagination');
			  elem.classList.add('activePagination');
		  }
        </script>



      </div>
      <div class="video" onclick='location.href = "https:\/\/google.com"'>
        <div class="TAcenter">
          <h6 style="font-size: 1rem">ПОСМОТРИТЕ ВИДЕОРОЛИК</h6>
          <h1 style="font-size: 3rem">КАК МЫ РАБОТАЕМ</h1>
          <img src="public/img/icons/play.png" alt="" style="height: 80px; margin-top: 20px;">
        </div>
      </div>
      <div class="about flex row">
        <div class="flex col W50 H100 aboutOne">
          <h1 class="TAright" style="color: white; font-size: 3rem; font-weight: 900;">ЧТО О НАС</h1>
          <h1 class="TAright" style="color: white; font-size: 3rem; font-weight: 900;">ГОВОРЯТ ЛЮДИ</h1>
          <p class="TAright" style="text-shadow: none; margin-top: 3rem;">Мы отбираем самое интересное, что есть на сегодняшний день на рынке,
            совершенствуем, дорабатываем и делаем из этого эксклюзивное
            товарное предложение! В дальнейшем, когда на рынке будет создан
            стабильно растущий потребительский спрос на данный продукт,
            компания, для обеспечения качества и объемов производимого продукта,
            создает своё собственное производство с возможным участием
            в акционировании партнеров компании!</p>
        </div>
        <div class="flex col W50 H100 aboutTwo">
          <div style="width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); padding: 20% 5%;">
            <p class="TAleft" style="color: white; text-shadow: none; font-size: 1.4rem;">Гипертония – около 30 лет, сахарный диабет – около
            20 лет (сахар 12 йод). После 3-х месяцев употребления
            гидроплазмы «WATER FOR LIFE» повышение давления
            стало меньше беспокоить, прибавилось энергии,
            улучшилось настроение, сахар снизился до 7 ед.</p>
            <p class="TAleft" style="color: white; text-shadow: none; font-weight: 900; margin-top: 6rem;">АНДРЕЙ, 48 ЛЕТ (Г. ЧЕЛЯБИНСК)</p>
          </div>
        </div>
      </div>
      <div class="contact TAcenter">
       <p style="color: rgb(75, 75, 77); text-shadow: none; font-weight: 400; font-size: 1.4rem">легко найти</p>
       <h1 style="font-weight: 900; font-size: 3rem">СВЯЗЬ С НАМИ</h1>
        <div class="flex row aroundJC" style="margin-top: 40px;">
          <div class="flex col TAcenter">
            <img src="public/img/icons/phone.png" class="contactImg" alt="" style="height: 80px; width: 80px; margin-bottom: 30px; margin-left: 40px;">
              <a href="tel:+77273645330" class="" style="font-weight: 500;">+7 (727) 364 53 30</a>
              <a href="tel:+77767575757" class="" style="font-weight: 500;">+7 (776) 757 57 57</a>
          </div>
          <div class="flex col TAcenter">
            <img src="public/img/icons/letters.png" class="contactImg" alt="" style="height: 80px; width: 80px; margin-bottom: 30px; margin-left: 40px;">
            <p style="color: rgb(75, 75, 77); text-shadow: none; font-weight: 500;">info@ip-one.net</p>
          </div>
          <div class="flex col TAcenter">
            <img src="public/img/icons/place.png" class="contactImg" alt="" style="height: 80px; width: 80px; margin-bottom: 30px; margin-left: 40px;">
              <p style="color: rgb(75, 75, 77); text-shadow: none; font-weight: 500;">Республика Казахстан,</p>
              <p style="color: rgb(75, 75, 77); text-shadow: none; font-weight: 500;">050040,город Алматы,</p>
              <p style="color: rgb(75, 75, 77); text-shadow: none; font-weight: 500;">мкр. Коктем-, дом 50</p>
          </div>
        </div>
      </div>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1453.512919637556!2d76.92624907202593!3d43.229917896312074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836f283211e715%3A0x89563f3c0010d4b0!2z0YPQu9C40YbQsCDQn9C40YDQvtCz0L7QstCwIDUwLCDQkNC70LzQsNGC0Ys!5e0!3m2!1sru!2skz!4v1602330502203!5m2!1sru!2skz" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <?php require_once 'footer.php'; ?>
      <script>
        window.addEventListener('scroll', function() {
            if(pageYOffset > 200) {
                document.querySelector('header').style.background = 'rgba(0, 0, 0, 0.5)';
            } else {
              document.querySelector('header').style.background = 'rgba(0, 0, 0, 0)';
            }
        });
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    var time = 2, cc = 1;
    $(window).scroll(function(){
        $('.counter').each(function() {
            var cPos = $(this).offset().top;
            var topWindow = $(window).scrollTop();
            
            if(cPos < topWindow + 500) {
                if(cc < 2) {

                        $('span').each(function() {
                            var
                            i = 1,
                            num = $(this).data('num'),
                            step = 100 * time / num,
                            that = $(this),
                            int = setInterval(function() {
                                if(i <= num) {
                                    that.html(i);
                                } else {
                                    cc = cc + 2;
                                    clearInterval(int);
                                }
                                i++
                            }, step);
                        });
                }
            }
        });
    });
</script>
    </body>
</html>

