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
    <link rel="stylesheet" href="./display.css">
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
                    <a href="logout.php" id="logout"><button>Log out <i class="uil uil-signin"></i></button></a>
                </div>
                <!-- <a href="logout.php"><button>Log out</button></a> -->
            </nav>
        </header>
        <!--======================== header ends ========================-->





        <!--======================== main starts ========================-->
        <main>
            <div class="display__container">
                <?php 
                    include("connection.php");
                    session_start();
                    $userID = $_SESSION['id'];
                    $sql = "SELECT * FROM `users` WHERE `user_id` = '$userID'";
                    
                    $data = mysqli_query($conn, $sql);

                    // $result = mysqli_fetch_assoc($data);

                    // print_r($result);

                ?>

                <table border="2px" cellpadding="20px">
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Dog's name</th>
                        <th>Dog's Photo</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                        $i = 1;
                        while($result = mysqli_fetch_assoc($data)) {
                            ?>
                            <tr>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['age']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $result['address']; ?></td>
                                <td class="dogname"><?php echo $result["dog's name"]; ?></td>
                                <td class="dogimg"><img src="<?php echo $result['image']; ?>" alt="dog photo" height="100px" width="130px"></td>
                                <td class="action__btn">
                                    <button class="edit" title="edit"><a href="edit.php?edit_id=<?php echo $result['user_id']; ?>"><i class="uil uil-edit"></i></a></button>
                                    <button class="delete" title="delete"><a href="delete.php?del_id=<?php echo $result['user_id']; ?>"><i class="uil uil-trash-alt"></i></a></button>
                                    <a href="cngpass.php" class="change" title="change password"><button><i class="uil uil-keyhole-square"></i></button></a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>    
                </table>
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