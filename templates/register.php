<?php
require("./partials/header.php");
?>

<main>
    <!-- Form -->
    <section class="center">
        <div class="registration_formular">
            <h2 style="font-weight: 800;">Register</h2>
            <form action="" method="POST">
                <!-- Email -->
                <label for="email">Email: </label><br>
                <input type="email" name="email" id="reg_email" placeholder="Email"><br>
                <!-- Password -->
                <label for="password">Password: </label><br>
                <input type="password" name="password" id="reg_pass" placeholder="Password"><br>
                <!-- Password Confirmation -->
                <label for="password_confirm">Repeat Password: </label><br>
                <input type="password" name="password_confirm" id="reg_pass_confirm" placeholder="Password"><br>
                <!-- Checkbox -->
                <input type="checkbox" name="terms" id="personal_data_checkbox">
                <label for="terms" id="reg_checkbox">I agree to the Terms of Service and Privacy Policy. </label>
                <!-- Submit -->
                <input type="submit" value="Register" name="user_register">
            </form>

            <?php
                if (isset($_POST['user_register'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $password_confirm = $_POST['password_confirm'];
                    $terms = isset($_POST['terms']);

                    if ($password !== $password_confirm) {
                        echo 'Passwords do not match';
                    } else if (!$terms) {
                        echo 'You must agree to the terms';
                    } else {
                        $user = new User();
                        $registration_status = $user->register($email, $password);
                        echo $registration_status;
                    }
                }
            ?>
        </div>
    </section>
</main>

<?php
require("./partials/footer.php");
?>
