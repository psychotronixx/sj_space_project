<?php
    require("./partials/header.php");
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
        header('Location: admin.php');
    }
?>

    <main>
        <!-- Form -->
        <section class="center">
            <div class="registration_formular">
                <h2 style="font-weight: 800;">Login</h2>
                <form action="" method="POST">
                    <!-- Email -->
                    <label for="email">Email: </label><br>
                    <input type="email" name="email" id="reg_email" placeholder="Your Email"><br>
                    <!-- Password -->
                    <label for="password">Password: </label><br>
                    <input type="password" name="password" id="reg_pass" placeholder="Your Password"><br>
                    <!-- Submit -->
                    <input type="submit" value="Login" name="user_login" > <!-- onclick="register(event);" -->
                </form>

                <?php
            
                    if(isset($_POST['user_login'])){
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $user = new User();
                        //tu bude vzdy true alebo false
                        $login_success = $user->login($email,$password);
                        if($login_success == true){
                            header('Location: admin.php');
                            exit;
                        }else{
                            echo 'Nesprávne meno alebo heslo';
                        }
                    }
                
                ?>

                <p>If not registered</p>
                <button><a href="./register.php">Register</a></button>
            </div>
        </section>
    </main>

<?php
    require("./partials/footer.php");
?>