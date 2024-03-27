<?php
    require_once "./functions/header.php";
?>

<body>
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
        <!-- Gallery -->
        <section class="slideshow-container">
            <div class="slides fade">
                <img src="./img/gallery/Earth from space.jpg" style="width:100%">
            </div>
            
            <div class="slides fade">
                <img src="./img/gallery/Artwork planets.jpg" style="width:100%">
            </div>
            
            <div class="slides fade">
                <img src="./img/gallery/black hole.jpg" style="width:100%">
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </section>
        <section class="text_container center">
            <h2>Journey through Our Space Art Gallery</h2>
            <p>
                Step into a boundless realm of wonder and exploration at our space-themed gallery, where the infinite depths of the cosmos converge with artistic expression. Our gallery serves as a portal to the universe, showcasing a breathtaking collection that transcends the confines of Earth and invites visitors on an extraordinary odyssey through the stars.
                Each canvas is a celestial masterpiece, capturing the ethereal beauty of distant galaxies, the captivating dance of celestial bodies, and the enigmatic allure of cosmic phenomena. Our artists, inspired by the vastness and mysteries of space, channel their creativity to depict nebulous clouds, vibrant planets, and the breathtaking vistas of uncharted worlds.
                From surreal interpretations of black holes to vivid portraits of planetary systems, our gallery celebrates the intersection of artistry and astronomical marvels. Visitors are immersed in a sensory experience, where each stroke of paint or sculpted form tells a story of cosmic exploration, inviting contemplation and igniting a sense of wonder.
                Beyond the visual, our gallery offers a space for dialogue and discovery, fostering a community of enthusiasts, astronomers, artists, and dreamers alike. Engage in discussions about the cosmos, attend celestial-themed events, or join workshops that meld science and art, all within the captivating ambiance of our cosmic sanctuary.
                Whether you're an avid stargazer, an artist seeking cosmic inspiration, or simply someone mesmerized by the magnificence of the universe, our gallery invites you to embark on an unforgettable journey through the cosmos—one that transcends boundaries and awakens the imagination."
                Feel free to tailor this to your specific gallery or adjust the language to better suit your audience!
            </p>
        </section>
    </main>

    <?php
    require_once "./functions/footer.php";
    ?>

    <!-- JS -->
    <script src="./js/slideshow.js"></script>
</body>
</html>