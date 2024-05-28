<?php
    require("./partials/header.php");
?>

    <main>
        <section class="images_container">
            <div class="next_to">
                <img src="../assets/img/planets/Galaxy cluster.jpg" alt="galaxy">
                <img src="../assets/img/planets/Mining moon.jpg" alt="mining moon">
            </div>
            <img src="../assets/img/planets/Spaceman chilling.jpg" class="spaceman_img" alt="spaceman chilling">
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
        require("./partials/footer.php");
    ?>