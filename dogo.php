<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogo Shop</title>
    <!-- iconScout cdn link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">
    <!-- css stylesheet -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <!--======================== header starts ========================-->
        <header>
            <nav>
                <div class="nav__container">
                    <!-- nav header -->
                    <a href="dogo.php" class="nav__header">
                        <div class="nav__logo">
                            <img src="./assets/dogo.png" alt="logo">
                        </div>
                        <h4><span class="highlight">Pup's</span> World</h4>
                    </a>
                    <!-- nav header ends -->

                    <!-- nav links -->
                    <div class="nav__links">
                        <a href="dogo.php">Home</a> 
                        <a href="">About</a>
                        <a href="">Products</a>
                        <a href="display.php">Know more</a>
                        <a href="">Contact us</a>
                    </div>
                    <!-- nav links ends -->
                    <a href="login.php" id="login"><button>Log in <i class="uil uil-signout"></i></button></a>
                </div>
            </nav>
        </header>
        <!--======================== header ends ========================-->




        <!--======================== main starts ========================-->
        <main>
            <div class="form__container">
                <form action="dogoaction.php" method="POST" name="fr" class="fr" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Your name" onkeyup="nameValid()" required>
                        <span id="errorName"></span>
                    </div>
                    <div class="form-group">
                        <input type="number" name="age" id="age" placeholder="Your age" onkeyup="ageValid()" required>
                        <span id="errorAge"></span>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Your email" onkeyup="emailValid()" required>
                        <span id="errorEmail"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" id="address" placeholder="Your address" onkeyup="addressValid()" required>
                        <span id="errorAddress"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="password" id="createpass" placeholder="create password" onkeyup="createPassValid()" required>
                        <span id="errorCreatePass" class="errorPass"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="confirmpass" id="confirmpass" placeholder="confirm password" onkeyup="confirmPassValid()" required>
                        <span id="errorConfirmPass" class="errorPass"></span>
                    </div>
                    <div class="dog__name">
                        <label for="">*Dog's name</label>
                        <select name="dogname" id="dogname" required>
                            <option value="">select---</option>
                            <option value="Golder Retriever">Golder Retriever</option>
                            <option value="Beagle">Beagle</option>
                            <option value="Pug">Pug</option>
                            <option value="Shiba Inu">Shiba Inu</option>
                            <option value="Germen Shepherd">Germen Shepherd</option>
                            <option value="Rottweiler">Rottweiler</option>
                            <option value="Doberman">Doberman</option>
                            <option value="Pomeranian">Pomeranian</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" id="image" required>
                    </div>
                    <button type="submit" name="btn" id="btn" value="submit">Submit<i class="uil uil-arrow-right"></i></button>
                </form>
            </div>
        </main>
        <!--======================== main ends ========================-->






        <!--======================== footer starts ========================-->
        <footer>
            <div class="footer__container">
                <div class="footer__desc">
                    <h4><span class="highlight">Pup's</span> World</h4>
                    <span class="landmark"><i class="uil uil-map-pin-alt"></i> Barcelona, Spain - 08001</span>
                </div>
                <div class="permalinks">
                    <li><a href="#"><i class="uil uil-angle-right-b"></i> Home</a></li>
                    <li><a href="#"><i class="uil uil-angle-right-b"></i> About</a></li>
                    <li><a href="#"><i class="uil uil-angle-right-b"></i> Products</a></li>
                    <li><a href="#"><i class="uil uil-angle-right-b"></i> Know more</a></li>
                    <li><a href="#"><i class="uil uil-angle-right-b"></i> Contact us</a></li>
                    <li><a href="#"><i class="uil uil-angle-right-b"></i> Sell</a></li>
                </div>
                <div class="terms">
                    <li><a href="#"><i class="uil uil-angle-right-b"></i> Terms & Conditions</a></li>
                    <li><a href="#"><i class="uil uil-angle-right-b"></i> Privacy policies</a></li>
                    <li><a href="#"><i class="uil uil-angle-right-b"></i> Achievements</a></li>
                    <li><a href="#"><i class="uil uil-angle-right-b"></i> Learn more</a></li>
                </div>
                <div class="socials">
                    <li><a href="#"><i class="uil uil-facebook"></i></a></li>
                    <li><a href="#"><i class="uil uil-instagram"></i></a></li>
                    <li><a href="#"><i class="uil uil-linkedin"></i></a></li>
                    <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                    <li><a href="#"><i class="uil uil-medium-m"></i></a></li>
                    <li><a href="#"><i class="uil uil-telegram"></i></a></li>
                </div>
            </div>
        </footer>
        <!--======================== footer ends ========================-->
    </div>
    <script src="./main.js"></script>
</body>
</html>

