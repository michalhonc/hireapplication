<?php
    session_start();
?>
<!doctype html>
<html lang="cs">

  <head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Nejpopulárnější IT HR aplikace">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Hirepplication</title>

    <!-- links -->
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

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

              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="index.php">Domů</a>

              <a class="menu_item-selected mdl-navigation__link mdl-typography--text-uppercase" href="offers.php">Nabídky</a>

              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="contacts.php">Kontakt</a>

              <?php
                  if($_SESSION['login']!=""){
                    echo'<a class="mdl-navigation__link mdl-typography--text-uppercase" href="admin.php">' . $_SESSION['login'] . '</a>';
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

          <div class="be-together-section-background"></div>

          <div class="slogans">
            <div class="logo-font slogan">Víme přesně, co hledáte... </div>
            <div class="logo-font sub-slogan">Vyberte si z více něž <span class="__sub_sloga-highlight">12 000</span> nabídek zaměstnání v oboru <span class="__sub_sloga-highlight">IT</span>.</div>
          </div>

        </div>

        <!-- search section  -->
        <div class="search-section">
          <div class="search-wrap">
            <div class="chips">
              <input class="__search-input" placeholder="+ klíčové slovo">
              <button type="submit" class="__search-button" aria-label="odeslat hledani"><i class="material-icons">search</i></button>
            </div>
          </div>
        </div>

        <!-- section -->
        <div id="more" class="more-section-offers">

          <div class="card-container __more_section-cards">

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

            <div class="__item mdl-card mdl-shadow--2dp">
              <div class="mdl-card__media">
                <img src="images/more-from-1.png" alt="karta 1">
              </div>
              <div class="mdl-card__title">
                  <h4 class="mdl-card__title-text">Ruby on Rails Junior</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <ul>
                  <li class="company-name">Predictables</li>
                  <li>Jatecká 2/25 Liberec</li>
                  <li>Práce na částečný úvazek</li>
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
                <img src="images/more-from-4.png" alt="karta 4">
              </div>
              <div class="mdl-card__title">
                  <h4 class="mdl-card__title-text">Junior C# vývojář</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <ul>
                  <li class="company-name">Developus</li>
                  <li>Korytná 6 Praha</li>
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
                  <h4 class="mdl-card__title-text">Consultant</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <ul>
                  <li class="company-name">Preferos</li>
                  <li>Jihlavská 4 Jihlava</li>
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
                  <h4 class="mdl-card__title-text">Analytik</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <ul>
                  <li class="company-name">CloudApps</li>
                  <li>Těžírenská 10/1245 Praha</li>
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

          <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
          </ul>
  
        </div>

        <!-- HOT section -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- custom -->
    <script>
      $(document).ready(function(){
        $(".owl-carousel").owlCarousel({ 'nav': true, 'loop': true, responsive : {
          0: {
            items: 1
          },

          700: {
            items: 2
          },
          1000: {
            items: 3
          }
        }});
      });

      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.chips');
        var instances = M.Chips.init(elems);
      });
    </script>

  </body>

</html>
