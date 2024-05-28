<?php
    class Page {
        private $page_name;

        public function set_page_name($page_name) {
            $this->page_name = $page_name;
        }

        function add_script() {
            $result = '';

            switch($this->page_name){
                case 'home':
                    break;
                case 'helpus':
                    $result .= '<script src="../assets/js/registration_form.js"></script>';
                    break;
                case 'register':
                    $result .= '<script src="../assets/js/registration.js"></script>';
                    break;
                case 'login':
                    $result .= '<script src="../assets/js/login.js"></script>';
                    break;
                case 'gallery':
                    $result .= '<script src="../assets/js/slideshow.js"></script>';
                    break;
                case 'planets':
                    $result .= '<script src="../assets/js/accordion.js"></script>';
                    break;
                case 'thankyou':
                    $result .= '<script src="../assets/js/alert_thanks.js"></script>';
                    break;
            }
            return $result;
        }

        function add_stylesheet() {
            $result =  '<link rel="stylesheet" href="../assets/css/shared_footer.css">
                        <script src="https://kit.fontawesome.com/a37b7dc179.js" crossorigin="anonymous"></script>
                        <link href="https://fonts.cdnfonts.com/css/proxima-nova-condensed" rel="stylesheet">';

            switch($this->page_name) {
                case 'home':
                    $result .= '<link rel="stylesheet" href="../assets/css/shared_header.css">';
                    $result .= '<link rel="stylesheet" href="../assets/css/home.css">';
                    break;
                case 'login':
                    $result .= '<link rel="stylesheet" href="../assets/css/shared_header.css">';
                    $result .= '<link rel="stylesheet" href="../assets/css/helpus.css">';
                    break;
                case 'register':
                    $result .= '<link rel="stylesheet" href="../assets/css/shared_header.css">';
                    $result .= '<link rel="stylesheet" href="../assets/css/helpus.css">';
                    break;
                case 'helpus':
                    $result .= '<link rel="stylesheet" href="../assets/css/shared_header.css">';
                    $result .= '<link rel="stylesheet" href="../assets/css/helpus.css">';
                    break;
                case 'gallery':
                    $result .= '<link rel="stylesheet" href="../assets/css/shared_header.css">';
                    $result .= '<link rel="stylesheet" href="../assets/css/gallery.css">';
                    break;
                case 'planets':
                    $result .= '<link rel="stylesheet" href="../assets/css/shared_header.css">';
                    $result .= '<link rel="stylesheet" href="../assets/css/planets.css">';
                    break;
                case 'admin':
                    $result .= '<link rel="stylesheet" href="../assets/css/shared_header.css">';
                    $result .= '<link rel="stylesheet" href="../assets/css/style.css">';
                    break;
                case 'thankyou':
                    $result .= '<link rel="stylesheet" href="../assets/css/thankyou.css">';
                    $result .= '<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>';
                    $result .= '<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>';
                    break;
            }
            return $result;
        }

        function redirect() {
            header("Location: templates/home.php");
            die("Home page not found");
        }
    }

?>