<?php
    require("../_inc/config.php");
    $logged_in = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo('Space | ' . basename($_SERVER["SCRIPT_NAME"], '.php'));?></title>

    <?php
      $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
      $page_object  = new Page();
      $page_object->set_page_name($page_name);
      echo($page_object->add_stylesheet());
    ?>

</head>
<body>
    <header>
        <nav>
            <!-- HAMBURGER -->
            <div class="header_hamburger">
                <i class="fa-solid fa-bars" class="hamburger"></i>
                <ul class="hamburger_popup">
                    <li><a href="./planets.php">PLANETS</a></li>
                    <li><a href="./gallery.php">GALLERY</a></li>
                    <li><a href="./helpus.php">HELP US</a></li>
                </ul>
            </div>
            <!-- LOGO & TEXT -->
            <a href="./home.php" class="header_logo">
                <img src="../assets/img/logo/red-white space logo.png" alt="header planet logo">
                <span>SPACE</span>
            </a>
            <!-- LINK BUTTONS -->
            <div class="header_btn">
                <a href="./planets.php">PLANETS</a>
                <a href="./gallery.php">GALLERY</a>
                <a href="./helpus.php">HELP US</a>
            </div>
            <!-- LANGUAGE & DARK MODE & LOGIN -->
            <div class="header_ld_mode">
                <!-- <ion-icon name="language-outline"></ion-icon> -->
                <?php if($logged_in): ?>
                    <a class="login" href="./logout.php">Logout</a>
                <?php else: ?>
                    <a class="login" href="./login.php">Login</a>
                <?php endif; ?>
                <i class="fa-solid fa-globe"></i>
                <ul>
                    <li><a href="">EN</a></li>
                    <li><a href="./SK.php">SK</a></li>
                </ul>
            </div>
        </nav>
    </header>