<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="header">
    <a href="../index.php" class="logo"><img src="../resources/img/logo/mridharecidencelogo.png" alt="IFE"></a>
    <div class="header-right">
        <a href="../index.php"><i class="fa fa-home"></i> Home</a>
        <a href="../view/dashboard.php"><i class="fa fa-sign-in"></i>
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
        <a href="#"></i> Registration</a>
    </div>
</div>