    <footer>
        <div class="footer_middle_text">
            <div class="footer_text">
                <h2>Fast Links</h2>
                <ul>
                    <li><a href="./home.php">HOME</a></li>
                    <li><a href="./planets.php">PLANETS</a></li>
                    <li><a href="./gallery.php">GALLERY</a></li>
                    <li><a href="./helpus.php">HELP US</a></li>
                </ul>
            </div>
            <div class="footer_text footer_who">
                <h2>Who We Are</h2>
                <ul>
                    <li>
                        Exploring the wonders of the cosmos, 
                        our website is dedicated to space.
                    </li>
                    <li>
                        Join us on an stronomical journey
                    </li>
                </ul>

            </div>
            <div class="footer_text">
                <h2>Contact&nbsp;Us</h2>
                <div class="footer_icons">
                    <a href="https://instagram.com" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://facebook.com" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://ukf.sk" class="ukf"><i class="fa-solid fa-graduation-cap"></i></a>
                </div>
                <ul>
                    <li><a href="mailto:patrik.sabo@studentk.ukf.sk"><i class="fa-regular fa-envelope"></i>Send Me Email</a></li>
                    <li><a href="tel:+1800229933"><i class="fa-solid fa-phone"></i>Call Me</a></li>
                </ul>
            </div>
        </div>
        <span class="copyright">&copy; 2023 Patrik Šabo. All rights reserved</span>
    </footer>

    <?php
        $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
        $page_object  = new Page();
        $page_object->set_page_name($page_name);
        echo($page_object->add_script());
    ?>
</body>
</html>