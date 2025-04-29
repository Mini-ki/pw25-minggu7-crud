<!DOCTYPE html>
<head>
    <title>SIMPELAH</title>
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
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
                        <a href="login.php">LOGIN</a>
                    </li>
                    <li>
                        <a href="">SIGN UP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <section class="signup">
            <img class="imageMenu" src="../asset/image/Trash.png" alt="TrashIlustration">
            <div class="kolomform">
                <h1>Hello, Welcome!!</h1>
                <h2>Sign-Up</h2>
                <form action="" id="kolomSignUp">
                    <label for="">First Name</label>
                    <input type="text" id="firstName" placeholder="">
                    <span class="errorText" id="errorFirstName"></span>

                    <label for="">Last Name</label>
                    <input type="text" id="lastName" placeholder="">
                    <span class="errorText" id="errorLastName"></span>

                    <label for="">Email</label>
                    <input type="text" id="email" placeholder="">
                    <span class="errorText" id="errorEmail"></span>

                    <label for="">Password</label>
                    <input type="password" id="password" placeholder="">
                    <span class="errorText" id="errorPassword"></span>
                    
                    <label for="">Confirm Password</label>
                    <input type="password" id="confirmPassword" placeholder="">
                    <span class="errorText" id="errorConfirmPassword"></span>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </section>
    </div>
    <div class="iconSuksesWrapper" id="iconSignUpSukses">
        <i class="fa-solid fa-circle-check checkIcon"></i>
    </div>
    <script src="../asset/js/signUp.js"></script>
</body>
</html>