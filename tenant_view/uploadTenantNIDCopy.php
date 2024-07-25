<?php 
    include "../controller/session.php" ;
    include "../tenant_controller/uploadTenantNIDCopyCntrl.php" ;
    require_once '../tenant_controller/tenantinfoCntrl.php';
    $tenant = fetchtenant($_GET['tenant_id']);
    
    if($_SESSION['usertype'] == "Admin"){}
    else{header("location: ../controller/hackerCntrl.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>NID Upload</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
        <input type="button" onclick="goBack()" class="link-hvr" value="← Back">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="top-mar-50">
                    <h1><legend>PROFILE PICTURE UPDATE</legend></h1>
                    <table>
                        <tr>
                            <td colspan="2"><img  src="../resources/img/tenant_img/contractScanCopy/<?php echo $tenant['nid_copy'] ?>" alt="<?php echo $tenant['nid_copy'] ?>" height="200px"></td>
                        </tr>
                        <tr>
                            <td><input type="file" name="image" style="font-size: 15px;"></td>
                        </tr>
                        <tr>
                            <input type="hidden" name="tenant_id" value="<?php echo $_GET['tenant_id']; ?>">
                            <td><input type="submit" value="upload" name="upload" class="btn"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="green">
                                <?php  
                                    if(isset($message))  
                                    {
                                        echo $message;

                                    }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <br>
                </div>
            </form>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>