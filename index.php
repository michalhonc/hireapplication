<?php
    session_start();
?>
<!doctype html>
<html lang="cs">

  <head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Nejpopulárnější IT HR aplikace">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Hirepplication</title>

    <!-- links -->
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

  </head>

  <body>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <!-- header -->
      <div class="header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">

          <!-- logo -->
          <span class="title mdl-layout-title">
            <a href="index.php"><img class="logo-image" src="images/logo.png" alt="logo"></a>
          </span>

          <!-- menu -->
          <div class="navigation-container">
            <nav class="navigation mdl-navigation">

              <a class="menu_item-selected mdl-navigation__link mdl-typography--text-uppercase" href="index.php">Domů</a>

              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="offers.php">Nabídky</a>

              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="contacts.php">Kontakt</a>

              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="add-offer.php">Přidat nabídku</a>

              <?php
                if($_SESSION['login']!=""){
                  echo'<a class="mdl-navigation__link mdl-typography--text-uppercase" href="add-offer.php">' . $_SESSION['login'] . '</a>';
                } else {
                  echo'<a class="mdl-navigation__link mdl-typography--text-uppercase" href="login.php">Přihlásit se</a>';
                }
              ?>
              

            </nav>
          </div>

        </div>
      </div>

      <div class="content mdl-layout__content">

        <div class="be-together-section mdl-typography--text-center">

          <div class="be-together-section-background">

            <a href="#more">
              <button class="fab mdl-button mdl-button--fab" aria-label="rozsirit">
                <i class="material-icons">expand_more</i>
              </button>
            </a>
          </div>

          <div class="slogans">
            <div class="logo-font slogan">Dělat to, co vás baví... </div>
            <div class="logo-font sub-slogan">Vybrali jste si <span class="__sub_sloga-highlight">nejperspektivnější</span> obor dnešní doby.</div>
          </div>

        </div>

        <div class="line-section">
          <div class="line">
            <div class="line-text">
              <p class="mdl-typography--headline mdl-typography--font-light">
                Místo, kde máte největší šanci najít práci snů v oboru, který dnes hýbe světem.
              </p>
              <p>
                <a class="mdl-typography--font-light mdl-typography--text-uppercase alt-link" href="offers.php">
                  Prozkoumat všechny nabídky&nbsp;<i class="material-icons">chevron_right</i>
                </a>
              </p>
            </div>
          </div>
        </div>

        <!-- section -->
        <div id="more" class="more-section">

          <div class="section-title mdl-typography--display-1-color-contrast">Nejžhavější pracovní nabídky</div>

          <div class="card-container mdl-grid owl-carousel">

            <div class="__item mdl-card mdl-shadow--2dp">
              <div class="mdl-card__media">
                <img src="images/more-from-1.png" alt="karta 1">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Nette vývojář</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <ul>
                  <li class="company-name">Redesign me a.s.</li>
                  <li>Moravská 115, Praha</li>
                  <li>Práce na plný úvazek</li>
                  <li>Vysokoškolské vzdělání</li>
                </ul>
              </div>
              <div class="mdl-card__actions">
                 <a class="link mdl-button mdl-js-button mdl-typography--text-uppercase" href="offer.php">
                   Prohlédnout si nabídku
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="__item mdl-card mdl-shadow--2dp">
              <div class="mdl-card__media">
                <img src="images/more-from-4.png" alt="karta 4">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Správce sítě</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <ul>
                  <li class="company-name">CO networks</li>
                  <li>Práčská  1145/5, Praha</li>
                  <li>Práce na plný úvazek</li>
                  <li>Středoškolské vzdělání</li>
                </ul>
              </div>
              <div class="mdl-card__actions">
                 <a class="link mdl-button mdl-js-button mdl-typography--text-uppercase" href="offer.php">
                    Prohlédnout si nabídku
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="__item mdl-card mdl-shadow--2dp">
              <div class="mdl-card__media">
                <img src="images/more-from-2.png" alt="karta 2">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Angular 6 vývojář</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <ul>
                  <li class="company-name">Webster s.r.o.</li>
                  <li>Řevnická 121/1, Praha - Třebonice</li>
                  <li>Práce na plný úvazek</li>
                  <li>Středoškolské vzdělání</li>
                </ul>
                </div>
              <div class="mdl-card__actions">
                 <a class="link mdl-button mdl-js-button mdl-typography--text-uppercase" href="offer.php">
                    Prohlédnout si nabídku
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="__item mdl-card mdl-shadow--2dp">
              <div class="mdl-card__media">
                <img src="images/more-from-3.png" alt="karta 3">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Tester</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <ul>
                  <li class="company-name">Úvěrová banka</li>
                  <li>Malenská 11 Liberec</li>
                  <li>Práce na částečný úvazek</li>
                  <li>Vysokoškolské vzdělání</li>
                </ul>
              </div>
              <div class="mdl-card__actions">
                 <a class="link mdl-button mdl-js-button mdl-typography--text-uppercase" href="offer.php">
                    Prohlédnout si nabídku
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

          </div>

        </div>

        <!-- footer -->
        <footer class="footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--left-section">
              <button class="mdl-mega-footer--social-btn sb1" aria-label="paticka social"></button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn sb2" aria-label="paticka social"></button>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">Hirepplication team © 2018</p>
          </div>

          <div class="mdl-mega-footer--bottom-section">
            <a class="link mdl-typography--font-light" href="conditions.php">Všeobecné podmínky</a>
          </div>

        </footer>

      </div>
    </div>
    
    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <!-- custom -->
    <script src="scripts/jquery.ihavecookies.js"></script>
    <script>
      $(document).ready(function(){
        $(".owl-carousel").owlCarousel({ 'nav': true, 'loop': true, responsive : {
          // breakpoint from 0 up
          0: {
            items: 1
          },

          700: {
            items: 2
          },
          // breakpoint from 768 up
          1000: {
            items: 3
          }
        }       
       });
      });

      var options = {
        title: '&#x1F36A; Chcete přijmout cookies a zásady ochrany osobních údajů?',
        message: 'Cookie jsou použity k zlepšení uživatelské zkušenosti...',
        delay: 600,
        expires: 1,
        link: '#privacy',
        onAccept: function(){
            var myPreferences = $.fn.ihavecookies.cookie();
        },
        uncheckBoxes: true,
        acceptBtnLabel: 'Přijmout',
        moreInfoLabel: 'Více informací',
        cookieTypesTitle: 'Select which cookies you want to accept',
        fixedCookieTypeLabel: 'Essential',
        fixedCookieTypeDesc: 'These are essential for the website to work correctly.'
      }
      $(document).ready(function() {
          $('body').ihavecookies(options);
      });
    </script>

  </body>

</html>
