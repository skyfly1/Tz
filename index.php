<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>TZ</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/tz.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/media.css" media="screen">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/tz.js"></script>
  </head>
  <body>
    <header>
      <div class="container header__container">
        <div class="logo">
          <img src="img/logo.png" alt="">
        </div>
        <div class="header__bottom">
          <div id="cpBtn" onclick="toggleCP()">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
        <nav class="header__items" id="cp">
          <li><a class="to-chief">главная</a></li>
          <li><a class="to-work">портфолио</a></li>
          <li><a class="to-why">преимущества</a></li>
          <li><a class="to-how">схема работы</a></li>
          <li><a class="to-reviews">отзывы</a></li>
          <li><a class="to-form">контакты</a></li>
        </nav>
        <div class="header__namber">
          <p class="header__namber-1">+375 (29) 123-45-67</p>
          <p>+375 (29) 123-45-67</p>
        </div>
      </div>
    </header>
    <main id='main'>
      <div class="chief">
        <div class="container chief__container">
          <div class="swiper-container s1">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="chief-h1">
                  <span class="chief__line">ГЛАВНЫЙ ЗАГОЛОВОК</span>
                  <div class="chief__symbol"></div>
                </div>
                <p class="chief-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et doloremagna aliqua. </p>
                <a onclick='scrollToElement(".form")'><button class="chief-bth">оформить заявку</button></a>
              </div>
              <div class="swiper-slide">
                <div class="chief-h1">
                  <span class="chief__line">ГЛАВНЫЙ ЗАГОЛОВОК</span>
                  <div class="chief__symbol"></div>
                </div>
                <p class="chief-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et doloremagna aliqua. </p>
                <a onclick='scrollToElement(".form")'><button class="chief-bth">оформить заявку</button></a>
              </div>
              <div class="swiper-slide">
                <div class="chief-h1">
                  <span class="chief__line">ГЛАВНЫЙ ЗАГОЛОВОК</span>
                  <div class="chief__symbol"></div>
                </div>
                <p class="chief-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et doloremagna aliqua. </p>
                 <a onclick='scrollToElement(".form")'><button class="chief-bth">оформить заявку</button></a>
              </div>
              <div class="swiper-slide">
                <div class="chief-h1">
                  <span class="chief__line">ГЛАВНЫЙ ЗАГОЛОВОК</span>
                  <div class="chief__symbol"></div>
                </div>
                <p class="chief-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et doloremagna aliqua. </p>
                 <a onclick='scrollToElement(".form")'><button class="chief-bth">оформить заявку</button></a>
              </div>
              <div class="swiper-slide">
                <div class="chief-h1">
                  <span class="chief__line">ГЛАВНЫЙ ЗАГОЛОВОК</span>
                  <div class="chief__symbol"></div>
                </div>
                <p class="chief-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et doloremagna aliqua. </p>
                 <a onclick='scrollToElement(".form")'><button class="chief-bth">оформить заявку</button></a>
              </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <p class="chief__fa"><i class="fa fa-chevron-circle-down fa-3x" onclick='scrollToElement(".form")'></i></p>
        </div>
        <hr class="line__hr">
      </div>
      <div class="company">
        <div class="container">
          <h1 class="title">О КОМПАНИИ</h1>
          <img src="img/wave.png" alt="" class="wave">
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
          <div class="company__img">
            <img src="img/img.png" alt="" class="company__img-1">
            <img src="img/img.png" alt="" class="company__img-1">
            <img src="img/img.png" alt="" class="company__img-1">
          </div>
        </div>
      </div>
      <div class="work">
        <div class="container">
          <h1 class="title">наша работа</h1>
          <img src="img/wave.png" alt="" class="wave">
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
          <div class="work__imgames">
            <div class="work__img">
              <div class="work__info">
                <p class="work__p">название работы</p>
                <img src="img/wave.png" alt="" class="wave work__wave">
                <p class="work__description">описание работы</p>
              </div>
            </div>
            <div class="work__img">
              <div class="work__info">
                <p class="work__p">название работы</p>
                <img src="img/wave.png" alt="" class="wave work__wave">
                <p class="work__description">описание работы</p>
              </div>
            </div>
            <div class="work__img">
              <div class="work__info">
                <p class="work__p">название работы</p>
                <img src="img/wave.png" alt="" class="wave work__wave">
                <p class="work__description">описание работы</p>
              </div>
            </div>
            <div class="work__img">
              <div class="work__info">
                <p class="work__p">название работы</p>
                <img src="img/wave.png" alt="" class="wave work__wave">
                <p class="work__description">описание работы</p>
              </div>
            </div>
            <div class="work__img">
              <div class="work__info">
                <p class="work__p">название работы</p>
                <img src="img/wave.png" alt="" class="wave work__wave">
                <p class="work__description">описание работы</p>
              </div>
            </div>
            <div class="work__img">
              <div class="work__info">
                <p class="work__p">название работы</p>
                <img src="img/wave.png" alt="" class="wave work__wave">
                <p class="work__description">описание работы</p>
              </div>
            </div>
          </div>
        </div>
        <hr class="line__hr">
      </div>
      <div class="chance">
        <div class="container chance__container">
          <h2 class="chance__h2">НЕ УПУСТИ СВОЙ ШАНС! ОФОРМИ ЗАКАЗ ПРЯМО СЕЙЧАС!</h2>
          <button class="chance__button">ОФОРМИТЬ ЗАКАЗ 	&emsp;<i class="fa fa-chevron-right"></i></button>
        </div>
        <hr class="line__hr">
      </div>
      <div class="why">
        <div class="container">
          <h1 class="title">ПОЧЕМУ МЫ</h1>
          <img src="img/wave.png" alt="" class="wave">
          <p class="text why-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
          <div class="why__block">
            <div class="why__info">
              <img src="img/mon.png" alt="" class="why__img">
              <h4>преимущество 1</h4>
              <p class="why__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
            <div class="why__info">
              <img src="img/wand.png" alt="" class="why__img">
              <h4>преимущество 2</h4>
              <p class="why__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
            <div class="why__info">
              <img src="img/Rocket.png" alt="" class="why__img">
              <h4>преимущество 3</h4>
              <p class="why__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
            <div class="why__info">
              <img src="img/globe.png" alt="" class="why__img">
              <h4>преимущество 4</h4>
              <p class="why__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
            <div class="why__info">
              <img src="img/Settings.png" alt="" class="why__img">
              <h4>преимущество 5</h4>
              <p class="why__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
            <div class="why__info">
              <img src="img/Lay.png" alt="" class="why__img">
              <h4>преимущество 6</h4>
              <p class="why__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
            <div class="why__info">
              <img src="img/Wrench.png" alt="" class="why__img">
              <h4>преимущество 7</h4>
              <p class="why__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
            <div class="why__info">
              <img src="img/Note.png" alt="" class="why__img">
              <h4>преимущество 8</h4>
              <p class="why__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
          </div>
        </div>
      </div>
      <div class="how">
        <div class="container">
          <h1 class="title">как мы работаем</h1>
          <img src="img/wave.png" alt="" class="wave">
          <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
          <div class="how__block">
            <div class="how__info">
              <img src="img/Note1.png" alt="" class="how__img">
              <img src="img/1.png" alt="" class="how__img1">
              <h4>этап 1</h4>
              <p class="how__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
            <div class="how__info">
              <img src="img/Note1.png" alt="" class="how__img">
              <img src="img/2.png" alt="" class="how__img1">
              <h4>этап 2</h4>
              <p class="how__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
            <div class="how__info">
              <img src="img/Note1.png" alt="" class="how__img">
              <img src="img/3.png" alt="" class="how__img1">
              <h4>этап 3</h4>
              <p class="how__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
            <div class="how__info">
              <img src="img/Note1.png" alt="" class="how__img">
              <img src="img/4.png" alt="" class="how__img1">
              <h4>этап 4</h4>
              <p class="how__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
            <div class="how__info">
              <img src="img/Note1.png" alt="" class="how__img">
              <img src="img/5.png" alt="" class="how__img1">
              <h4>этап 5</h4>
              <p class="how__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
            <div class="how__info">
              <img src="img/Note1.png" alt="" class="how__img">
              <img src="img/6.png" alt="" class="how__img1">
              <h4>этап 6</h4>
              <p class="how__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
            </div>
          </div>
        </div>
      </div>
      <div class="reviews">
        <div class="container reviews__container">
          <h1 class="title reviews__title">отзывы о нашей работе</h1>
          <div class="swiper-container s2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="reviews__info">
                  <img src="img/user.png" alt="">
                  <div class="reviews__text">
                    <p class="reviews__p"><span>Имя Фамилия,</span> <font class="font">должность</font> <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="reviews__info">
                  <img src="img/user.png" alt="">
                  <div class="reviews__text">
                    <p class="reviews__p"><span>Имя Фамилия,</span> <font class="font">должность</font> <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-next"><i class="fa fa-arrow-right fa-2x"></i></div>
            <div class="swiper-prev"><i class="fa fa-arrow-left fa-2x"></i></div>
          </div>
          <a href="reviews.php" class="reviews__link">ВСЕ ОТЗЫВЫ</a>
        </div>
      </div>
      <div class="form">
        <div class="container">
          <h1 class="title">оставьте отзыв</h1>
          <img src="img/wave.png" alt="" class="wave">
          <p class="text form__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
          <div class="form__data">
            <div class="form__contacts">
              <h2 class="form__h2">НАШ АДРЕС</h2>
              <p class="form__p">г.Минск, ул. Скрыганова, 6А, 4 этаж</p>
              <h2 class="form__h2">звоните</h2>
              <p class="form__p">+375 (29) 123-45-67,<br><br>  +375 (33) 123-45-67</p>
              <h2 class="form__h2">ПИШИТЕ</h2>
              <p class="form__p">info@promo-webcom.by</p>
            </div>
            <div class="form__info">
              <form action="addreview.php" method="POST" name="addReview">
                <label for="field0">ВАШЕ ИМЯ</label>
                <input type="text" id='field0 field' name='name' placeholder="Иванов Иван">
                <label for="field1">E-MAIL</label>
                <input type="email" id='field1 field' name='email' placeholder="example@mysite.com">
                <label for="field2">ВАША ДОЛЖНОСТЬ</label>
                <input type="text" id='field2 field' name='position' placeholder="Должность">
                <label for="field3">ОТЗЫВ</label>
                <input type="text" id='field3 field' name='review' placeholder="Ваше сообщение">
                <button class="form__button">+</button>
                <span class="form-h2">ФОТО</span>
                <div class="form__end">
                  <div class="form__check">
                    <label class="form-h2 block">введите код с картинки</label>
                    <input type="text" name='code' class="form__code">
                    <img src="img/code.png" alt="" class="form__img">
                  </div>
                  <div class="form__send">
                    <input type="submit" value="отправить" class="form__button send" />
                  </div>
                </div>
              </form>
            </div>
            <a onclick='scrollToElement(".chief")' class='link-to-top'><i class="fa fa-long-arrow-up fa-2x"></i></a>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="footer">
        <div class="container">
          <div class="footer__data">
            <div class="footer__contacts footer__logo">
              <img src="img/logo.png" alt="" class="footer__logo">
              <img src="img/wave.png" alt="" class="wave footer__wave">
              <p class="footer__text">Дисклеймер компании</p>
            </div>
            <div class="footer__contacts footer__soc">
              <p class="footer__social">мы в соцсетях</p>
              <img src="img/wave.png" alt="" class="wave footer__tide">
              <a href=""><i class="fa fa-instagram fa-2x"></i></a>
              <a href=""><i class="fa fa-twitter fa-2x"></i></a>
              <a href=""><i class="fa fa-facebook fa-2x"></i></a>
            </div>
            <div class="footer__contacts footer__address">
              <p class="footer__address">Адрес</p>
              <img src="img/wave.png" alt="" class="wave footer__img">
              <p class="footer__text">г. Минск, ул. Скрыганова, 6А,<br> 4 этаж</p>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <p class="copyrights__p">Copyrights 2015 	&#169; Webcom Media </p>
        <hr class="line__hr">
      </div>
    </footer>
    <script src="js/create-swiper.js"></script>
  </body>
</html>
