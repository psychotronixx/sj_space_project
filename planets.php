<?php
    require_once "./functions/header.php";
?>

<body>
    <link rel="stylesheet" href="./css/planets.css">
    <header>
        <nav>
            <!-- HAMBURGER -->
            <div class="header_hamburger">
                <i class="fa-solid fa-bars"></i>
                <ul>
                    <li><a href="./planets.php">PLANETS</a></li>
                    <li><a href="./gallery.php">GALLERY</a></li>
                    <li><a href="./helpus.php">HELP US</a></li>
                </ul>
            </div>
            <!-- LOGO & TEXT -->
            <a href="./index.php" class="header_logo">
                <img src="./img/logo/blue-white space logo.png" alt="index.html">
                <span>SPACE</span>
            </a>
            <!-- LINK BUTTONS -->
            <div class="header_btn">
                <a href="./planets.php">PLANETS</a>
                <a href="./gallery.php">GALLERY</a>
                <a href="./helpus.php">HELP US</a>
            </div>
            <!-- LANGUAGE & DARK MODE -->
            <div class="header_ld_mode">
                <!-- <ion-icon name="language-outline"></ion-icon> -->
                <i class="fa-solid fa-globe"></i>
                <ul>
                    <li><a href="">EN</a></li>
                    <li><a href="./SK.php">SK</a></li>
                </ul>

            </div>
        </nav>
    </header>
    <main>
        <section class="images_container">
            <div class="next_to">
                <img src="./img/planets/Galaxy cluster.jpg" alt="galaxy">
                <img src="./img/planets/Mining moon.jpg" alt="mining moon">
            </div>
            <img src="./img/planets/Spaceman chilling.jpg" class="spaceman_img" alt="spaceman chilling">
        </section>

        <!-- Accordion -->
        <div class="center">
            <h1 style="display: flex; justify-content: center; margin-bottom: 10px; font-size: 50px; text-decoration: underline;">Q&A</h1>
            <button class="accordion">How many planets are there in our solar system?</button>
            <div class="acc_answer">
                <p>In our solar system, there are eight recognized planets: 
                    Mercury, Venus, Earth, Mars, Jupiter, Saturn, Uranus, and Neptune.
                </p>
            </div>
            <button class="accordion">What defines a planet</button>
            <div class="acc_answer">
                <p>Planets are celestial bodies that orbit stars, are massive enough 
                    for their gravity to form them into a nearly round shape, and have 
                    cleared their orbits of other debris.
                </p>
            </div>
            <button class="accordion">What are terrestrial and gas giant planets?</button>
            <div class="acc_answer">
                <p>Gas giants, such as Jupiter and Saturn, are primarily composed of hydrogen 
                    and helium and have no solid surface, featuring thick atmospheres and dense cores.
                </p>
            </div>
            <button class="accordion">Are there planets that could support life beyond Earth?</button>
            <div class="acc_answer">
                <p>in the "habitable zone" of their stars, where conditions might support liquid water—a key 
                    ingredient for life as we know it. Some exoplanets have been identified as potential candidates 
                    for habitability, but further study is needed to determine their actual conditions.
                </p>
            </div>
            <button class="accordion">What are terrestrial and gas giant planets?</button>
            <div class="acc_answer">
                <p>Gas giants, such as Jupiter and Saturn, are primarily composed of hydrogen 
                    and helium and have no solid surface, featuring thick atmospheres and dense cores.
                </p>
            </div>
        </div>
    </main>
    
    <?php
    require_once "./functions/footer.php";
    ?>

    <!-- JS -->
    <script src="./js/accordion.js"></script>
</body>
</html>