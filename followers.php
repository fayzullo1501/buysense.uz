
<!-- icon list--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <meta charset="utf-8">
    <title>Подпичики - BUYSENSE</title>
    <meta content="BUYSENSE Мы - ведущая узбекская компания, специализирующаяся на предоставлении услуг посредничества между владельцами магазинов и клиентами в области рассрочки товаров." name="description">
    <meta content="BUYSENSE - Ведущая узбекская компания в области рассрочки товаров." property="og:title">
    <meta content="BUYSENSE Мы - ведущая узбекская компания, специализирующаяся на предоставлении услуг посредничества между владельцами магазинов и клиентами в области рассрочки товаров." property="og:description">
    <meta content="images/og.jpg" property="og:image">
    <meta content="BUYSENSE - Ведущая узбекская компания в области рассрочки товаров." property="twitter:title">
    <meta content="BUYSENSE Мы - ведущая узбекская компания, специализирующаяся на предоставлении услуг посредничества между владельцами магазинов и клиентами в области рассрочки товаров." property="twitter:description">
    <meta content="images/og.jpg" property="twitter:image">
    <meta property="og:type" content="website">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
  <body>
    <!-- Page Header-->
      <header class="page-header" style="padding-bottom: 24px">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default-with-top-panel" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-fullwidth" data-md-stick-up-offset="90px" data-lg-stick-up-offset="150px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-top-panel rd-navbar-collapse">
              <div class="rd-navbar-top-panel-inner">
                <div class="left-side">
                  <div class="group">
                    <ul style="font-size: 25px;" class="list-inline">
                      <li><a class="icon icon-sm icon-secondary-5 fa fa-instagram" href="#"></a></li>
                      <li><a class="icon icon-sm icon-secondary-5 fa fa-facebook" href="#"></a></li>
                      <li><a class="icon icon-sm icon-secondary-5 fa fa-telegram" href="#"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="center-side">
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand fullwidth-brand"><a class="brand-name" href="index.html"><img src="images/logo.png" alt="" width="314" height="48"/></a></div>
                </div>
                <div class="right-side">
                  <!-- Contact Info-->
                  <div class="contact-info">
                    <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                      <div class="unit__left"><span class="icon icon-primary text-middle mdi mdi-phone"></span></div>
                      <div class="unit__body"><a class="text-middle" href="tel:#">
                        +998 (90) 046-30-70
                        </a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar collapse toggle-->
                <button class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand mobile-brand"><a class="brand-name" href="index.html"><img src="images/logo.png" alt="" width="314" height="48"/></a></div>
              </div>
              <div class="rd-navbar-aside-right">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-scroll-holder">
                    <ul class="rd-navbar-nav">
                      <li><a href="index.html">Главная</a>
                      </li>
                      <li><a href="about-us.html">О нас</a>
                      </li>
                      <li><a href="contacts.html">Контакты</a>
                      </li>
                      <li class="active"><a href="calculator.html">Калькулятор</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
       <!--Контакты-->
        <section class="section section-md bg-white text-center">
            <div class="shell">
                <div class="range range-50 range-md-center">
                    <div class="cell-sm-8">
                    <h2>Список подписчиков:</h2>
<?php include("../follow/subscriptions.php"); ?>

                    </div>
                </div>
            </div>
        </section>
      
    
      
      
      <script>
        const form = document.getElementById('calculatorForm');
        const resultDiv = document.getElementById('result');
      
        form.addEventListener('submit', function(event) {
          event.preventDefault();
          
          const amountInput = document.getElementById('amount');
          const monthsSelect = document.getElementById('months');
      
          const amount = parseFloat(amountInput.value);
          const months = parseInt(monthsSelect.value);
      
          if (months === 6) {
            const amountWithInterest = amount * 1.20 * 1.26 / 6;
            const installment = (amountWithInterest / 1).toFixed(2);
            resultDiv.innerText = `6 месяцев: ${installment} сум.`;
          } else if (months === 12) {
            const amountWithInterest = amount * 1.20 * 1.44 / 12;
            const installment = (amountWithInterest / 1).toFixed(2);
            resultDiv.innerText = `12 месяцев: ${installment} сум.`;
          }
        });
      </script>
      
      
      

      <!-- Page Footer-->
      <footer class="page-footer text-left text-sm-left">
        <div class="shell-wide"><br><br>
          <div class="page-footer-minimal">
            <div class="shell-wide">
              <div class="range range-50">
                <div class="cell-sm-6 cell-md-3 cell-lg-4 wow fadeInUp" data-wow-delay=".1s">
                  <div class="page-footer-minimal-inner">
                    <h4>Время работы</h4>
                    <ul class="list-unstyled">
                      <li>
                        <div class="group-xs"> 
                          <div>
                            <dl class="list-desc">
                              <dt>Вт - Пят: </dt>
                              <dd class="text-gray-darker"><span style="color:black">8:00–20:00</span></dd>
                            </dl>
                          </div>
                          <div>
                            <dl class="list-desc">
                              <dt>Суб - Вс: </dt>
                              <dd class="text-gray-darker"><span style="color:black">9:00–18:00</span></dd>
                            </dl>
                          </div>
                        </div>
                      </li>
                      <li>
                        <p class="rights" style="color:black"><span>&copy;&nbsp;</span><span>2023</span><span>&nbsp;</span><span class="copyright-year"></span>BUYURUB. Все права защищены. Developed by <a href="https://www.fayxanur.uz" style="color:black">FAYXANUR</a></p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-5 cell-lg-4 wow fadeInUp" data-wow-delay=".2s">
                  <div class="page-footer-minimal-inner">
                    <h4>Адрес</h4>
                    <ul class="list-unstyled">
                      <li>
                        <dl class="list-desc">
                          <dt><span class="icon icon-sm mdi mdi-map-marker"></span></dt>
                          <dd><a class="link link-gray-darker" href="#" >Чилонзор 14/8, Ташкент, Узбекистан</a></dd>
                        </dl>
                      </li>
                      <li>
                        <dl class="list-desc">
                          <dt><span class="icon icon-sm mdi mdi-phone"></span></dt>
                          <dd class="text-gray-darker" style="color:black">Контакты: <a class="link link-gray-darker" href="tel:+998 (90) 046-30-70">+998 (90) 046-30-70</a>
                          </dd>
                        </dl>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="cell-sm-8 cell-md-4 wow fadeInUp" data-wow-delay=".3s">
                  <div class="page-footer-minimal-inner-subscribe">
                    <h4>Подписка</h4>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-mailform-inline form-center" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form-wrap">
                        <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="subscribe-email">Email</label>
                      </div>
                      <button class="button button-primary-2 button-effect-ujarak button-square" type="submit"><span>Подписаться</span></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- PANEL-->
    <!-- END PANEL-->
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__cent"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>