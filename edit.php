<?php 
    include("./connection.php");
    $edit_id = $_REQUEST['edit_id'];
    $sql = "SELECT * FROM `users` WHERE `user_id`= '$edit_id'";
    $data = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($data);
?>


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
    <link rel="stylesheet" href="./edit.css">
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
                </div>
            </nav>
        </header>
        <!--======================== header ends ========================-->




        <!--======================== main starts ========================-->
        <main>
            <div class="form__container">
                <form action="./editaction.php" method="POST" name="fr" class="form" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <input type="hidden" name="uid" value="<?php echo $result['user_id']; ?>">
                    </div>
                    <div class="form-group">
                        <div class="group">
                            <input type="text" name="name" id="name" onkeyup="nameValid()" value="<?php echo $result['name']; ?>"> <i class="uil uil-edit"></i>
                        </div>
                        <span id="errorName"></span>
                    </div>
                    <div class="form-group">
                        <div class="group">
                            <input type="number" name="age" id="age" onkeyup="ageValid()" value="<?php echo $result['age']; ?>"> <i class="uil uil-edit"></i>
                        </div>
                        <span id="errorAge"></span>
                    </div>
                    <div class="form-group">
                        <div class="group">
                            <input type="email" name="email" id="email" onkeyup="emailValid()" value="<?php echo $result['email']; ?>"> <i class="uil uil-edit"></i>
                        </div>
                        <span id="errorEmail"></span>
                    </div>
                    <div class="form-group">
                        <div class="group">
                            <input type="text" name="address" id="address" onkeyup="addressValid()" value="<?php echo $result['address']; ?>"> <i class="uil uil-edit"></i>
                        </div>
                        <span id="errorAddress"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="createpass" id="createpass" placeholder="create password" onkeyup="createPassValid()" required>
                        <span id="errorCreatePass" class="errorPass"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="confirmpass" id="confirmpass" placeholder="confirm password" onkeyup="confirmPassValid()" required>
                        <span id="errorConfirmPass" class="errorPass"></span>
                    </div>
                    <div class="dog__name">
                        <label for="">*Dog's name</label>
                        <select name="dogname" id="dogname">
                            <option value="" <?php if($result["dog's name"] == ''){echo 'selected';} ?>>select---</option>
                            <option value="Golder Retriever" <?php if($result["dog's name"] == 'Golden Retriever'){echo 'selected';} ?>>Golder Retriever</option>
                            <option value="Beagle" <?php if($result["dog's name"] == 'Beagle'){echo 'selected';} ?>>Beagle</option>
                            <option value="Pug" <?php if($result["dog's name"] == 'Pug'){echo 'selected';} ?>>Pug</option>
                            <option value="Shiba Inu" <?php if($result["dog's name"] == 'Shiba Inu'){echo 'selected';} ?>>Shiba Inu</option>
                            <option value="Germen Shepherd" <?php if($result["dog's name"] == 'Germen Shepherd'){echo 'selected';} ?>>Germen Shepherd</option>
                            <option value="Rottweiler" <?php if($result["dog's name"] == 'Rottweiler'){echo 'selected';} ?>>Rottweiler</option>
                            <option value="Doberman" <?php if($result["dog's name"] == 'Doberman'){echo 'selected';} ?>>Doberman</option>
                            <option value="Pomeranian" <?php if($result["dog's name"] == 'Pomeranian'){echo 'selected';} ?>>Pomeranian</option>
                        </select>
                    </div>
                    <button type="submit" name="btn" id="btn" value="submit">Update</button>
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