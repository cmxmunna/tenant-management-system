<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="resources/img/icon/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="resources/stylesheet/ife.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="resources/stylesheet/footer_info.css?v=<?php echo time(); ?>">
    <title>IFE Home</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="header">
        <a href="index.php" class="logo"><img src="resources/img/logo/ife-logo.gif" alt="IFE"></a>
        <div class="header-right">
            <a href="view/dashboard.php"><i class="fas fa-key"></i>
                <?php
                    if(isset($_SESSION['username']))
                    {
                        echo $_SESSION['username'];
                    }
                    else
                    {
                        echo "Login";
                    }
                ?>
            </a>
            <a href="view/registration.php"><i class="fa fa-user-plus"></i> Registration</a>
        </div>
    </div>
    <div class="heading">
        <ul>
            <li class="dropmenu"><a href="index.php">&nbsp;&nbsp;<i class="fa fa-home"></i>&nbsp;&nbsp;</a></li>
            <li class="dropmenu"><a href="how_to_do_payment/payment.php"><i class="fa fa-credit-card"></i> Payment
                    Options</a> </li>
            <li class="dropmenu"><a href="#"><i class="fa fa-angle-up"></i> Scroll Up</a></li>
        </ul>
    </div>
    <br><br>
    <div class="col-3 center">
        <h1>Welcome to Mridha Recidence</h1> 
    </div>
    <div class="row">
        <div class="col-2 center">
            <img src="resources/img/images/about.png" alt="About Mission Vision">
        </div>
    </div>
    <br><br>
    <div class="col-3 center">
        <h1 class='color-cyan'>Showing All Available Rooms</h1> <br>
    </div>

    <?php
        require_once 'model/room_model.php';
        function fetchShowableRooms()
        {
            return onlyShowableRooms();
        }
        $rooms = fetchShowableRooms();
    ?>
    <div class="row">
        <?php foreach ($rooms as $i => $room): ?>
            <div class="col-1">
                <table border="1">
                    <tr>
                        <td class='center'><img width="200px" src="resources/img/room_img/<?php echo $room['image'] ?>" alt="<?php echo $room['room_no'] ?>"></td>
                    </tr>
                    <tr>
                        <td class='center'>
                            Room No: <?php echo $room['room_no'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='center'>
                            Rent Price: <?php echo $room['rent']." TK" ?>
                        </td>
                    </tr>
                    <tr>
                        <td class='center'>
                            Address: <?php echo $room['house_address'] ?>
                    </tr>
                    <tr>
                        <td class='center'>
                            Room Details: <?php echo $room['room_details'] ?>
                        </td>
                    </tr>
                </table>
            </div>
        <?php endforeach; ?>
    </div>
    
    <!-- footer start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Contact</h4>
                    <p>
                        Internet For Everyone. Twin Tower <br>
                        007 Purbachol New Town C/A <br>
                        Tel : (8802) 222211111 <br>
                        Mob : (880) 1627000000 <br>
                        Fax : (8802) 222222222 <br>
                        Email : info@ife.com.bd <br>
                    </p>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="internetpack/home_internet.php">Home Internet</a></li>
                        <li><a href="internetpack/corporate_internet.php">Corporate Internet</a></li>
                        <li><a href="internetpack/student_internet.php">Student Package</a></li>
                        <li><a href="internetpack/covarage_area.php">Covarage area</a></li>
                        <li><a href="internetpack/hosting_developement.php">hosting and developement</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="aboutus/about_us.php">about us</a></li>
                        <li><a href="aboutus/privacy_policy.php">privacy policy</a></li>
                        <li><a href="internetpack/special_offer.php">special offer</a></li>
                        <li><a href="payment/payment.php">payment options</a></li>
                        <li><a href="aboutus/faq.php">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php include('header_footer/footer_news.php'); ?>
    <div class="copyright">
        <p>Copyright © 2021 || All Rights Reserved by <a href="aboutus/spacex_soft_tech.php"> SpaceX Soft Tech</a></p>
    </div>
    <!-- footer end -->
</body>

</html>