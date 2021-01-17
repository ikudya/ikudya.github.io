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
    <link rel="stylesheet" type="text/css" href="css/card.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
    <script src="js/owl.carousel.min.js"></script>
  </head>
<body>
  <header id="header" class="header">
  <a href="#" class="logo">UniGlo</a>
  <nav>
    <ul class="menu">
      <li><a href="index.php">Главная</a></li>
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
  <section id="shopping-cart">
    <div id="cart">
      
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
