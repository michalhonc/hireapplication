<?php
    session_start();
    if($_SESSION['login']==""){
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
                        <h2>Přidejte novou nabídku!</h2>
                        <div class="mdl-grid">                                
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                    <div class="mdl-grid">

                                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield">
                                            <textarea class="contact-textarea mdl-textfield__input" type="text" name="textarea" rows= "3" id="textarea"><?php echo $textarea;?></textarea>
                                            <label class="mdl-textfield__label" for="textarea">Popis nabídky...</label>
                                        </div>

                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" name="name" value="<?php echo $name;?>">
                                            <label class="mdl-textfield__label" for="name">Název...</label>
                                        </div>
                                        <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" name="surname" value="<?php echo $surname;?>">
                                            <label class="mdl-textfield__label" for="surname">Firma...</label>
                                        </div>

                                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield">
                                            <input class="mdl-textfield__input" type="text" name="email" value="<?php echo $email;?>">
                                            <label class="mdl-textfield__label" for="email">Email...</label>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- login -->
    <script>
    $('.message a').click(function() {
      $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
    </script>
    </body>

</html>