<?php
    session_start();
    if($_SESSION['login']==true){
        header("location: index.php");
    }
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

    <!--  TODO: corerct links -->
    <!-- links -->
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="styles.css">

  </head>

    <body>
        <div class="admin mdl-layout mdl-js-layout mdl-layout--fixed-header">
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
                      
                      <a class="mdl-navigation__link mdl-typography--text-uppercase" href="logout.php">Odhlásit se</a>
                      </nav>
                  </div>
                </div>
            </div>
                <div class="admin-form content mdl-layout__content">

                  <!-- section -->
                  <section class="contact mdl-grid">
                      <h2>Nová pracovní nabídka</h2>
                      <div class="mdl-grid">                                
                        <form action="php/addOffer.php" method="post">
                            <div class="mdl-grid">     
                            
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                  <input class="mdl-textfield__input" type="text" name="job">
                                  <label class="mdl-textfield__label" for="job">Pracovní pozice</label>
                                </div>
                                
                               <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                  <input class="mdl-textfield__input" type="text" name="country">
                                  <label class="mdl-textfield__label" for="country">Země</label>
                                </div>
                                
                               <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                  <input class="mdl-textfield__input" type="text" name="street">
                                  <label class="mdl-textfield__label" for="street">Ulice</label>
                                </div>
                                
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                  <input class="mdl-textfield__input" type="text" name="streetNumber">
                                  <label class="mdl-textfield__label" for="streetNumber">Číslo popisné</label>
                                </div>
                                
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                  <input class="mdl-textfield__input" type="text" name="postCode">
                                  <label class="mdl-textfield__label" for="postCode">PSČ</label>
                                </div>
                                
                                <div class="select">
              					          <select class="select-text" name="obligation">
                                    <option value="FULL_TIME">Plný úvazek</option>
                                    <option value="PART_TIME">Částečný úvazek</option>
              					          </select>
              					          <span class="select-highlight"></span>
              					          <span class="select-bar"></span>
              					          <label class="select-label">Typ úvazku</label>
                				        </div>
                                
                                <div class="select">
                                  <select class="select-text" name="education">
                                    <option value="ELEMENTARY">Základní</option>
                                    <option value="SECONDARY">Středoškolské</option>
                                    <option value="UNIVERSITY">Vysokoškolské</option>
                                  </select>
                                  <span class="select-highlight"></span>
                                  <span class="select-bar"></span>
                                  <label class="select-label">Dosažené vzdělání</label>
                				        </div>
                                
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                  <input class="mdl-textfield__input" type="text" name="sallary">
                                  <label class="mdl-textfield__label" for="sallary">Mzda</label>
                                </div>
  
                                <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield">
                                  <textarea class="contact-textarea mdl-textfield__input" type="text" name="content" rows= "5"></textarea>
                                  <label class="mdl-textfield__label" for="content">Popis nabídky</label>
                                </div>
                                
                                <input type="submit" class="contact-btn mdl-cell mdl-cell--6-col mdl-cell--12-col-phone mdl-button mdl-js-button mdl-button--raised"
                                aria-label="odeslat">
                            </div>
                        </form>
                      </div>
                  </section>

                </div>
            </div>



    
    <!-- js -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    </body>

</html>
