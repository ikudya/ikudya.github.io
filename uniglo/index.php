<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>ikudya</title>
    <meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fot=no">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style_fir.css">
    <link rel="stylesheet" type="text/css" href="css/animation.css">
    <link rel="stylesheet" type="text/css" href="css/reg.css">
    <link rel="stylesheet" type="text/css" href="css/adaptive.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
    <script src="js/owl.carousel.min.js"></script>
  </head>
<body>
  <header id="header" class="header">
  <a href="#" class="logo">UniGlo</a>
  <nav>
    <ul class="menu">
      <li><a href="#header">Главная</a></li>
      <li><a href="#services">Сервисы</a></li>
      <li><a href="#portfolio">Примеры</a></li>
      <li><a href="#contact">Контакты</a></li>
      <?php if (!isset($_COOKIE['glo_user_email'])) { ?>
      <li>
       <a onclick="show('block')" class="regButton">Авторизация</a>
          <div onclick="show('none')" id="gray"></div>
          <div id="window">
            <img class="close" src="img/header/close.png" alt=""  onclick="show('none')">
            <div class="dws-wrapper">
              <div class="dws-form">
                <input type="radio" id="tab-1" name="tabs" checked>
                <label class="tab" for="tab-1" title="Вкладка 1">Авторизация</label>
                <input type="radio" name="tabs" id="tab-2">
                <label class="tab" for="tab-2" title="Вкладка 2">Регистрация</label>
                <form id="form-1" class="tab-form" action="login.php" method="POST">
                  <div class="box-input">
                    <input name="maillogin"class="input" type="text" required>
                    <label>Введите E-mail</label>
                  </div>
                  <div class="box-input">
                    <input name="passwordlogin" class="input" type="password" required>
                    <label>Введите пароль</label>
                  </div>
                  <button href="#" type="submit" class="button">Войти</button>
                </form>
                <form id="form-2" class="tab-form" action="signup.php" method="POST">
                  <input name="mailreg" class="input" type="email" placeholder="Введите E-mail адрес">
                  <input name="namereg" class="input" type="text" placeholder="Введите свое имя">
                  <input name="passwordreg"class="input" type="password" placeholder="Введите пароль">
                  <button href="#" type="submit" class="button">Регистрация</button>
                  <div class="recover">
                    <input type="checkbox" id="ckbox">
                    <label for="ckbox">Ознакомлен(-а) и принимаю <a href="#">условия регистрации</a></label>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </li>   
      <?php } else { ?>
        <li><a>Привет, <?php echo($_COOKIE['glo_user_name']); ?> </a></li>
        <li><a href="exit.php" class="regButton">Выход</a></li>
        <li><a href="inv.php" class="refButton">Корзина</a></li>
      <?php } ?>
    </ul>
    <button class="menu-open">
          <img src="img/header/menu.svg" alt="Open menu">
    </button>
    <div class="burger-menu__overlay"></div>
  </nav>    
 </header>
 <section class="banner">
  <div class="container">
     <div class="cloud">
      <img src="img/header/cloud1.png" style="--i:1;">
      <img src="img/header/cloud2.png" style="--i:2;">
      <img src="img/header/cloud3.png" style="--i:3;">
      <img src="img/header/cloud4.png" style="--i:4;">
      <img src="img/header/cloud5.png" style="--i:5;">
    </div>
  </div>
 </section> 
  <section id="services">
    <div class="container">
      <div class="title">
        <h2>
             Сервисы
        </h2>
        <p>
             Ознакомься и пойми нужно ли тебе это
        </p>
      </div>
      <div class="services clearfix">
        <div class="services_item">
          <img src="img/icon1.png" alt="Услуга" class="">
          <h3>Надоел старый цвет?</h3>
          <p> Вот ходишь ты со своим старым затёрым цветом, а мог бы уже ходить с дизайнерским решением. Если тебе надоел старый вид своего Glo Hyper, у тебя есть возможность выбрать, каким ты хочешь его видеть.</p>
        </div>
        <div class="services_item">
          <img src="img/icon2.png" alt="Услуга" class="">
         <h3>Чем удивим?</h3>
         <p> Если ты пришел сюда, то у тебя явно есть интерес к защите своего устройства. Тут есть возможность прямо онлайн придумать и выбрать цвет, который будет реализован на заказ лично для вас</p>
        </div>
        <div class="services_item">
          <img src="img/icon3.png" alt="Услуга" class="">
          <h3>Упал и появились сколы?</h3>
          <p> Всем нам неприятно, когда на устройстве появляются какие-то дефекты. Но даже если GLO упал и появился скол, ты всегда можешь наклеить защитную пленку, чтобы такого больше не повторилось</p>
        </div>
      </div>
    </div>
  </section>
  <section id="portfolio">
    <div class="container">
     <div class="title">
       <h2>Пример</h2>
       <p>Пример наших работ </p>
      </div>
      <?php if (!isset($_COOKIE['glo_user_email'])) { ?> 
        <div class="gallery">
          <img src="img/img1.png" class="work1">
          <img src="img/img2.png" class="work2">
          <img src="img/img3.png" class="work3">
          <img src="img/img4.png" class="work4">
          <img src="img/img5.png" class="work5">
          <img src="img/img6.png" class="work6">
          <img src="img/img7.png" class="work7">
          <img src="img/img8.png" class="work8">
          <img src="img/img9.png" class="work9">
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item"><img src="img/img1.png" class="work1"></div>
          <div class="item"><img src="img/img2.png" class="work2"></div>
          <div class="item"><img src="img/img3.png" class="work3"></div>
          <div class="item"><img src="img/img4.png" class="work4"></div>
          <div class="item"><img src="img/img5.png" class="work5"></div>
          <div class="item"><img src="img/img6.png" class="work6"></div>
          <div class="item"><img src="img/img7.png" class="work7"></div>
          <div class="item"><img src="img/img8.png" class="work8"></div>
          <div class="item"><img src="img/img9.png" class="work9"></div>
        </div>
      <?php } else { ?>
        <div class="gallery">
          <div id="l0_b1" class="col-sm-4 img-responsive">
            <img src="img/img1.png" class="work1">
            <button onclick="addToCart('glo1')">Добавить в корзину</button>
          </div>
          <div id="l0_b1" class="col-sm-4 img-responsive">
            <img src="img/img2.png" class="work2">
            <button onclick="addToCart('glo2')">Добавить в корзину</button>
          </div>
          <div id="l0_b1" class="col-sm-4 img-responsive">
            <img src="img/img3.png" class="work3">
            <button onclick="addToCart('glo3')">Добавить в корзину</button>
          </div>
          <div id="l0_b1" class="col-sm-4 img-responsive">
            <img src="img/img4.png" class="work4">
            <button onclick="addToCart('glo4')">Добавить в корзину</button>
          </div>
          <div id="l0_b1" class="col-sm-4 img-responsive">
            <img src="img/img5.png" class="work5">
            <button onclick="addToCart('glo5')">Добавить в корзину</button>
          </div>
          <div id="l0_b1" class="col-sm-4 img-responsive">
            <img src="img/img6.png" class="work6">
            <button onclick="addToCart('glo6')">Добавить в корзину</button>
          </div>
          <div id="l0_b1" class="col-sm-4 img-responsive">
            <img src="img/img7.png" class="work7">
            <button onclick="addToCart('glo7')">Добавить в корзину</button>
          </div>

           <div id="l0_b1" class="col-sm-4 img-responsive">
            <img src="img/img8.png" class="work8">
            <button onclick="addToCart('glo8')">Добавить в корзину</button>
          </div>
          <div id="l0_b1" class="col-sm-4 img-responsive">
            <img src="img/img9.png" class="work9">
            <button onclick="addToCart('glo9')">Добавить в корзину</button>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="img/img1.png" class="work1">
            <button>Добавить в корзину</button>
          </div>
            <div class="item"> 
              <img src="img/img2.png" class="work2">
              <button>Добавить в корзину</button>
            </div>
            <div class="item">
              <img src="img/img3.png" class="work3">
              <button>Добавить в корзину</button>
            </div>
            <div class="item">
              <img src="img/img4.png" class="work4">
              <button>Добавить в корзину</button>
            </div>
            <div class="item">
              <img src="img/img5.png" class="work5">
              <button>Добавить в корзину</button>
            </div>
            <div class="item">
              <img src="img/img6.png" class="work6">
              <button>Добавить в корзину</button>
            </div>
            <div class="item">
              <img src="img/img7.png" class="work7">
              <button>Добавить в корзину</button>
            </div>
            <div class="item">
              <img src="img/img8.png" class="work8">
              <button>Добавить в корзину</button>
            </div>
            <div class="item">
              <img src="img/img9.png" class="work9">
              <button>Добавить в корзину</button>
            </div>
        </div>
      <?php } ?>
    </div>                         
  </section>

  <section id="contact">
           <div class="container">
              <div class="title">
                <h2>Контакты</h2>
                <p>Свяжись и узнай все самое интересное!</p>
                  <div class="profile">
                    <div class="profile-ava">
                       <div class="profile-img"><img src="img/ava.jpg" alt=""></div>
                     </div>
                     <div class="pofile-desc">
                       Остались вопросы? Задавай!
                     </div>               
                    <div class="pofile-btn">
                     <a href="https://t.me/ikudya" target="_blank" class="pofile-btn-link"><img src="https://mytab.link/img/icon-telegram.svg" alt="">Telegram</a>
                     <a href="viber://chat?number=%2B380678290559" target="_blank" class="pofile-btn-link"><img src="https://mytab.link/img/icon-viber.svg" alt="">Viber</a>
                     <a href="https://www.instagram.com/ikudya/?hl=ru" target="_blank" class="pofile-btn-link">
                       <img src="https://mytab.link/img/icon-instagram.svg" alt="">Instagram</a>
                     <a href="https://www.facebook.com/profile.php?id=100008437090358" target="_blank" class="pofile-btn-link"><img src="https://mytab.link/img/icon-facebook.svg" alt="">Facebook</a>
                    </div>
                  </div>
              </div>
            </div>
  </section> 
  <footer>
    <div class="title">       
        <p>
         &copy; Куденец Михаил 
         <br> 20.10.2020
        </p>
    </div>         
  </footer>     
    <script src="js/scroll.js"></script>
    <script src="js/main.js"></script>  
    <script src="js/inv.js"></script>
    <script>
      function show(state)
      {
      document.getElementById('window').style.display = state;  
      document.getElementById('gray').style.display = state;    
      } 
    </script> 
    <script type="text/javascript">
      window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);

      })  
    </script>   
</body>
</html>
