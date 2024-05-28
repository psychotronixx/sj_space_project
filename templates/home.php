<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require("./partials/header.php");
?>

    <main>
        <!-- Text over Image -->
        <section class="text_over_image">
            <h1>SPACE</h1>
            <img src="../assets/img/Earth x Space.jpg" alt="Big planet">
        </section>
        <!-- Text -->
        <section class="center text_container">
            <h2>The Enchanting Cosmos</h2>
            <p>
                Space, an expansive realm beyond our planet's confines, stirs wonder and
                fascination. Its canvas is adorned with billions of galaxies, each a spectacle
                of stars, nebulae, and planets. The Orion Nebula, a celestial nursery where
                new stars are born amidst swirling hues, captivates the imagination. Its vibrant
                colors and ethereal beauty speak of the cosmic dance of creation.
                The Andromeda Galaxy, a distant neighbor separated by two and a half million
                light-years, stands as a testament to the cosmic scale of existence. Its spiral
                arms, adorned with billions of stars, evoke a sense of awe at the sheer vastness
                of the universe.
            </p>
            <p>
                Beyond these visible wonders lie countless celestial bodies, each with its
                unique story. From the ethereal rings of Saturn to the tumultuous storms on
                Jupiter, the planets within our solar system offer glimpses into the diverse
                landscapes and conditions that exist beyond Earth.
            </p>
            <p>
                Moreover, space isn't merely a static portrait; it's a dynamic theater of cosmic 
                events. Supernovae, the explosive deaths of massive stars, illuminate the cosmos 
                with their fleeting brilliance. Quasars, powered by supermassive black holes at 
                their cores, beam light across unfathomable distances, serving as cosmic beacons 
                in the vast darkness.
                The allure of the cosmos isn't confined to its visual splendor alone. 
                It's a place where time and space bend, where the laws of physics take on new 
                dimensions, and where the unknown awaits discovery. This enchanting expanse 
                continues to beckon humanity, inviting us to explore its mysteries and broaden 
                our understanding of the universe.
            </p>
            <hr>
            <h2>The Marvels of Scientific Discovery</h2>
            <p>
                Beyond its visual allure, space houses scientific marvels that 
                challenge our understanding. Black holes, with their unfathomable 
                gravitational pull, are gateways to exploring the universe's fabric. 
                Planets in our solar system, from Mars rusty-red surface to the gas 
                giants with their majestic storms and rings, offer diverse landscapes 
                and secrets about our cosmic origin.
            </p>
            <hr>
            <h2>Human Exploration and Quest for Understanding</h2>
            <p>Human curiosity fuels space exploration, driving us to uncover the 
                mysteries of the cosmos. Landmarks, like Apollo's lunar missions, 
                exemplify our relentless pursuit of knowledge. Technological advancements, 
                such as the Hubble Space Telescope, provide unprecedented views into deep space, 
                expanding our comprehension of the universe. The search for extraterrestrial 
                life and the challenges of space exploration inspire creativity and push 
                the boundaries of human achievement.
            </p>
            <hr>
            <h2>Towards Infinity and Beyond</h2>
            <p>
                In the grand tapestry of existence, space stands as the ultimate frontier, 
                beckoning us to venture forth and explore its depths. As humanity continues its 
                journey into the cosmos, we not only seek to unravel its mysteries but also discover 
                more about ourselves and our place in the universe. With each probe launched, 
                each discovery made, and every innovation forged, we inch closer to the unknown, 
                driven by an insatiable thirst for knowledge and the audacious spirit to reach 
                for the stars.
            </p>
            <hr>
        </section>
        <!-- Table -->
        <section class="center">
            <h1 style="display: flex; justify-content: center; font-size: 35px; margin-bottom: 15px;">Space Count</h1>
            <table class="index_table">
                <tr>
                    <th>Celestial Bodies</th>
                    <th>Approximate Count</th>
                </tr>
                <tr>
                    <td>Stars</td>
                    <td>100 billion in Milky Way, billions of trillions in the observable universe</td>
                </tr>
                <tr>
                    <td style="background-color: #222;">Galaxies</td>
                    <td style="background-color: #222;">100-200 billion in the observable universe</td>
                </tr>
                <tr>
                    <td>Planets</td>
                    <td>Estimated 100 billion in the Milky Way alone</td>
                </tr>
            </table>
        </section>
    </main>

    <?php
    require("./partials/footer.php");
    ?>