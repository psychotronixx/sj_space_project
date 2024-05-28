<?php
    require("./partials/header.php");    
?>

    <main>
        <section class="text_container center">
            <ul>
                <li><h2>Join Us to Safeguard Our Skies!</h2></li>
                <p>
                    At our platform, we're on a mission not just to 
                    explore the cosmos but also to protect our planet from 
                    the growing threat of space debris. Every day, countless 
                    fragments of defunct satellites, spent rocket stages, and other 
                    space junk orbit the Earth, posing risks to operational 
                    satellites, spacecraft, and even the International Space Station.
                </p>
                <li><h2>Why Register With Us?</h2></li>
                <p>
                    By registering, you become a crucial part of our initiative to 
                    mitigate the hazards posed by space debris. Together, we're dedicated 
                    to developing innovative solutions, fostering awareness, and supporting 
                    programs aimed at cleaning up orbital pathways and preserving the beauty and 
                    functionality of space for generations to come.
                </p>
                <li><h2>Your Impact Matters!</h2></li>
                <p>
                    As a registered member, you'll receive updates on our ongoing efforts, 
                    opportunities to participate in clean-up projects, and exclusive access to 
                    events and collaborations with space agencies and environmental organizations. 
                    Your involvement can make a tangible difference in safeguarding not just space 
                    but also our planet's future.
                </p>
                <li><h2>Join the Movement!</h2></li>
                <p>
                    Take the step towards preserving the skies above us. Register today and be a part of a global community committed to ensuring a sustainable and debris-free outer space.
                    Together, let's protect our planet and the cosmos we cherish.
                </p>
            </ul>
            <hr>
        </section>
        <!-- Form -->
        <section class="center">
            <div class="registration_formular">
                <h2 style="font-weight: 800;">Registration</h2>
                <form> <!-- onsubmit="register(event);" -->
                    <!-- Name -->
                    <label for="name">Name: </label><br>
                    <input type="text" name="name" id="reg_username" placeholder="Username"><br>
                    <!-- Email -->
                    <label for="email">Email: </label><br>
                    <input type="email" name="email" id="reg_email" placeholder="Email"><br>
                    <!-- Password -->
                    <label for="password">Password: </label><br>
                    <input type="password" name="password" id="reg_pass" placeholder="Password"><br>
                    <!-- Continent -->
                    <label for="continent">Continent</label><br>
                    <select id="" name="continent">
                        <option value="asia">Asia</option>
                        <option value="africa">Africa</option>
                        <option value="north-america">North America</option>
                        <option value="south-america">South America</option>
                        <option value="antarctica">Antarctica</option>
                        <option value="europe">Europe</option>
                        <option value="australia">Australia</option>
                    </select><br>
                    <!-- Checkbox -->
                    <input type="checkbox" name="" id="personal_data_checkbox">
                    <label for="checkbox" id="reg_checkbox">I agree to the Terms of Service and Privacy Policy. </label>
                    <!-- Submit -->
                    <input type="submit" value="Register" onclick="register(event);">
                </form>
            </div>
        </section>
    </main>
    
    <?php
        require("./partials/footer.php");
    ?>
</body>
</html>