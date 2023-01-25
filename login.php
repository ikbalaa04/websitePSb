<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<title> Responsive Login and Signup Form </title>-->

        <!-- CSS -->
        <link rel="stylesheet" href="css/login.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="dashboard_user.php">
                        <div class="field input-field">
                            <input type="email" placeholder="Masukan Email" class="input" required>
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password" required>
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Lupa password?</a>
                        </div>

                        <div class="field button-field">
                            <button>Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Belum Punya Akun? <a href="#" class="link signup-link">Daftar</a></span>
                    </div>
                </div>

                <!-- <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="img/google.png" alt="" class="google-img">
                        <span>Google</span>
                    </a>
                </div>
            </div> -->
        </section>

        <!-- JavaScript -->
        <script src="js/login.js"></script>
    </body>
</html>
