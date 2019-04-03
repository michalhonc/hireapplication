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

              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="offers.php">Nabídky</a>

              <a class="menu_item-selected mdl-navigation__link mdl-typography--text-uppercase" href="contacts.php">Kontakt</a>

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

          <div class="be-together-section-background">

          </div>

          <div class="slogans">
            <div class="logo-font slogan">Zůstaňte s námi kontaktu... </div>
            <div class="logo-font sub-slogan"><span class="__sub_sloga-highlight">Podělte</span> se s námi o vašich zkušenostech.</div>
          </div>

        </div>

        <!-- section -->
        <section class="contact mdl-grid">
            <div class="mdl-grid mdl-typography--display-1-color-contrast">Napište nám!</div>
            <div class="mdl-grid">
                <div class="mdl-grid mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
                    <h4>Kontakt</h4>
                    <p><b>Hirepplication</b> pomáhá lidem z okruhu IT najít tu nejvýhodnější práci a podnikům pomoci najít ty nejlepší zaměstnance. Naše platforma je jednoduchá, snadná a nákladově efektivní pro menší a střední firmy, které nemají celé HR oddělení. </p>
                    <ul>
                        <li>Praha, Bělehradská 675/32</li>
                        <li>+420 839 049 022</li>
                        <li>info@hireapplication.cz</li>
                    </ul>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet">
                <?php
                    // promene
                    $errors = array();
                    $textarea = "";
                    $name = "";
                    $surname = "";
                    $email = "";


                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                      if (empty($_POST["textarea"])) {
                        array_push($errors, "Povinne pole textarea");
                      } else {
                        $textarea = test_input($_POST["textarea"]);
                        if (!preg_match("/^[a-zA-Z ]*$/",$textarea)) {
                          array_push($errors, "Only letters and white space allowed");
                        }
                      }
                      if (empty($_POST["name"])) {
                        array_push($errors, "Povinne pole jmeno");
                      } else {
                        $name = test_input($_POST["name"]);
                        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                          array_push($errors, "Only letters and white space allowed");
                        }
                      }
                      if (empty($_POST["surname"])) {
                        array_push($errors, "Povinne pole prijmeni");
                      } else {
                        $surname = test_input($_POST["surname"]);
                        if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
                          array_push($errors, "Only letters and white space allowed");
                        }
                      }
                      
                      if (empty($_POST["email"])) {
                        array_push($errors, "Email je povinna polozka");
                      } else {
                        $email = test_input($_POST["email"]);
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                          array_push($errors, "Email není validní");
                        }
                      }
                    }
                  
                    function test_input($data) {
                      $data = trim($data);
                      $data = stripslashes($data);
                      $data = htmlspecialchars($data);
                      return $data;
                    }

                      if (count($errors) > 0) {
                        echo "<ul>";
                        for ($i=0; $i < count($errors); $i++) { 
                          echo "<li style='color: #FF0000'>" . $errors[$i] . "</li>";
                        }
                        echo "</ul>";
                      } else {
                        $textarea = "";
                        $name = "";
                        $surname = "";
                        $email = "";
                      }
                    ?>
                    
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="mdl-grid">

                            <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield">
                                <textarea class="contact-textarea mdl-textfield__input" type="text" name="textarea" rows= "3" id="textarea"><?php echo $textarea;?></textarea>
                                <label class="mdl-textfield__label" for="textarea">Napište nám...</label>
                            </div>

                            <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="name" value="<?php echo $name;?>">
                                <label class="mdl-textfield__label" for="name">Jméno...</label>
                            </div>
                            <div class="mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="surname" value="<?php echo $surname;?>">
                                <label class="mdl-textfield__label" for="surname">Příjmení...</label>
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
            </div>
        </section>
        
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
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>

</html>
