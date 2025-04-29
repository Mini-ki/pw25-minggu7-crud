<?php
session_start();
include "koneksi.php";

?>

<!DOCTYPE html>
<head>
    <title>SIMPELAH</title>
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php
        $status = '';

        if (isset($_POST['email'])) {
            $email = mysqli_real_escape_string($koneksi, $_POST['email']);
            $password = md5($_POST['password']);
        
            $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
        
            if (mysqli_num_rows($query) > 0) {
                $data = mysqli_fetch_array($query);
                $_SESSION['user'] = $data;
                $status = 'success';
            } else {
                $status = 'failed';
            }
        }
    ?>
    <div id="loginStatus" data-status="<?php echo $status; ?>"></div>

    <nav>
        <div class="header">
            <div class="logoSimpelah">
                SIMPELAH!
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="../index.php">HOME</a>
                    </li>
                    <li>
                        <a href="">LOGIN</a>
                    </li>
                    <li>
                        <a href="signUp.php">SIGN UP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <section class="login">
            <img class= "imageMenu" src="../asset/image/Trash.png" alt="TrashIlustration">
            <div class="kolomform">
                <h1>Welcome Back!!</h1>
                <h2>Login</h2>
                <form id="kolomLogin" method="post">
                    <label for="">Email</label>
                    <input type="text" placeholder="" id="emailLogin" name='email'>
                    <label for="">Password</label>
                    <input type="password" placeholder="" id="passwordLogin" name='password'>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </section>
    </div>
    <div class="errorBoxWrapper">
        <div id="errorBox">
            Invalid Email or Password. Please try again!!
        </div>
    </div>
    <div class="iconSuksesWrapper" id="iconSignUpSukses">
        <i class="fa-solid fa-circle-check checkIcon"></i>
    </div>
    <script src="../asset/js/login.js"></script>
</body>
</html>
