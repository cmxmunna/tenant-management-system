<?php 
    include "../controller/session.php" ;
    require_once '../tenant_controller/tenantinfoCntrl.php';
    $tenant = fetchtenant($_GET['tenant_id']);

    require_once '../controller/paymentinfoCntrl.php'; 
    $payments = fetchallpayments();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Edit Profile</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
        <?php include('../controller/panelCntrl.php'); ?>
        <section>
        <input type="button" onclick="goBack()" class="link-hvr" value="← Back">
            <h1 class="color-cyan">TENANT PROFILE</h1>
            <table>
                <tr>
                    <td><label for="tenant_id">Tenant ID</label></td>
                    <td>: <label><?php echo $tenant['tenant_id'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td style="width: 450px;">: <label><?php echo $tenant['name'] ?></label>
                    </td>
                    <td rowspan="9">
                        <img width="200px" src="../resources/img/tenant_img/<?php echo $tenant['image'] ?>"
                            alt="<?php echo $tenant['name'] ?>"> <br>
                        <a href="../tenant_view/update_tenantImage.php?tenant_id=<?php echo $tenant['tenant_id'] ?>" class="green link-hvr">Update Profile Image</a>
                    </td>
                </tr>
                <tr>
                    <td><label for="father">Father</label></td>
                    <td>: <label><?php echo $tenant['father'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth</label></td>
                    <td>: <label><?php echo $tenant['dob'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender</label></td>
                    <td>: <label><?php echo $tenant['gender'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="religion">Religion</label></td>
                    <td>: <label><?php echo $tenant['religion'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="maritial_status">Maritial Status</label></td>
                    <td>: <label><?php echo $tenant['maritial_status'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="occupation">Occupation</label></td>
                    <td>: <label><?php echo $tenant['occupation'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="nid">National ID</label></td>
                    <td>: <label><?php echo $tenant['nid'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="phone_number">Phone Number</label></td>
                    <td>: <label><?php echo $tenant['phone_number'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="permanent_address">Permanent Address</label></td>
                    <td>: <label><?php echo $tenant['permanent_address'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="room_no">Room No</label></td>
                    <td>: <label><?php echo $tenant['room_no'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="advance">Advance</label></td>
                    <td>: <label class="green"><?php echo $tenant['advance'] ?> Tk</label></td>
                </tr>
                <tr>
                    <td><label for="monthly_bill">Monthly Bill</label></td>
                    <td>: <label class="green"><?php echo $tenant['monthly_bill'] ?> Tk</label></td>
                </tr>
                <tr>
                    <td><label for="balance">Balance</label></td>
                    <td>: <label class="red"><?php echo $tenant['balance'] ?> Tk</label></td>
                </tr>
                <tr>
                    <td><label for="rent_date">Rent Date</label></td>
                    <td>: <label ><?php echo $tenant['rent_date'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="status">Status</label></td>
                    <td>: <label><?php echo $tenant['status'] ?></label></td>
                </tr>
                <tr>
                    <td><a href="../tenant_view/update_tenantProfile.php?tenant_id=<?php echo $tenant['tenant_id'] ?>" class="green link-hvr">Edit Profile</a></td>
                </tr>
            </table>
            <br><br>
            <table border="1">
                <tr>
                    <td><label for="tenant_reg_img">MetroPoliton Reg. Scan Copy</label></td>
                    <td><label for="contract_img">Tenant Contract Scan Copy</label></td>
                    <td><label for="nid_copy">Tenant NID Scan Copy</label></td>
                </tr>
                <tr>
                    <td> 
                        <a href="../resources/img/tenant_img/contractScanCopy/<?php echo $tenant['tenant_reg_img'] ?>" class="green link-hvr"><img width="150px" src="../resources/img/tenant_img/contractScanCopy/<?php echo $tenant['tenant_reg_img'] ?>" alt="<?php echo $tenant['tenant_reg_img'] ?>"></a>
                    </td>
                    <td> 
                        <a href="../resources/img/tenant_img/contractScanCopy/<?php echo $tenant['contract_img'] ?>" class="green link-hvr"><img width="150px" src="../resources/img/tenant_img/contractScanCopy/<?php echo $tenant['contract_img'] ?>" alt="<?php echo $tenant['contract_img'] ?>"></a>
                    </td>
                    <td> 
                        <a href="../resources/img/tenant_img/contractScanCopy/<?php echo $tenant['nid_copy'] ?>" class="green link-hvr"><img width="150px" src="../resources/img/tenant_img/contractScanCopy/<?php echo $tenant['nid_copy'] ?>" alt="<?php echo $tenant['nid_copy'] ?>"></a>
                    </td>
                    <tr>
                        <td><a href="../tenant_view/uploadTenantMetroRegCopy.php?tenant_id=<?php echo $tenant['tenant_id'] ?>" class="green link-hvr">Upload Reg Copy</a></td>
                        <td><a href="../tenant_view/uploadTenantContractCopy.php?tenant_id=<?php echo $tenant['tenant_id'] ?>" class="green link-hvr">Upload Contract Copy</a></td>
                        <td><a href="../tenant_view/uploadTenantNIDCopy.php?tenant_id=<?php echo $tenant['tenant_id'] ?>" class="green link-hvr">Upload NID Copy</a></td>
                    </tr>
                </tr>
            </table>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>

</html>