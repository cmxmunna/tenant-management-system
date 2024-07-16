<?php 
    include "../controller/session.php" ;
    require_once '../tenant_controller/tenantinfoCntrl.php';
    $user = fetchtenant($_GET['tenant_id']);

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
                    <td>: <label><?php echo $user['tenant_id'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td style="width: 450px;">: <label><?php echo $user['name'] ?></label>
                    </td>
                    <td rowspan="9">
                        <img width="200px" src="../resources/img/tenant_img/<?php echo $user['image'] ?>"
                            alt="<?php echo $user['name'] ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="father">Father</label></td>
                    <td>: <label><?php echo $user['father'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth</label></td>
                    <td>: <label><?php echo $user['dob'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender</label></td>
                    <td>: <label><?php echo $user['gender'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="religion">Religion</label></td>
                    <td>: <label><?php echo $user['religion'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="maritial_status">Maritial Status</label></td>
                    <td>: <label><?php echo $user['maritial_status'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="occupation">Occupation</label></td>
                    <td>: <label><?php echo $user['occupation'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="nid">National ID</label></td>
                    <td>: <label><?php echo $user['nid'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="phone_number">Phone Number</label></td>
                    <td>: <label><?php echo $user['phone_number'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="permanent_address">Permanent Address</label></td>
                    <td>: <label><?php echo $user['permanent_address'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="room_no">Room No</label></td>
                    <td>: <label><?php echo $user['room_no'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="advance">Advance</label></td>
                    <td>: <label class="green"><?php echo $user['advance'] ?> Tk</label></td>
                </tr>
                <tr>
                    <td><label for="monthly_bill">Monthly Bill</label></td>
                    <td>: <label class="green"><?php echo $user['monthly_bill'] ?> Tk</label></td>
                </tr>
                <tr>
                    <td><label for="balance">Balance</label></td>
                    <td>: <label class="red"><?php echo $user['balance'] ?> Tk</label></td>
                </tr>
                <tr>
                    <td><label for="rent_date">Rent Date</label></td>
                    <td>: <label ><?php echo $user['rent_date'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="status">Status</label></td>
                    <td>: <label><?php echo $user['status'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="contract_img">Tenant Contract Scan Copy</label></td>
                    <td>: <label><?php echo $user['contract_img'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="tenant_reg_img">Tenant Reg. Scan Copy</label></td>
                    <td>: <label><?php echo $user['tenant_reg_img'] ?></label></td>
                </tr>
                <tr>
                    <td><a href="../tenant_view/update_tenantProfile.php?tenant_id=<?php echo $user['tenant_id'] ?>" class="green link-hvr">Edit Profile</a></td>
                    <td></td>
                    <td><a href="../tenant_view/update_tenantImage.php?tenant_id=<?php echo $user['tenant_id'] ?>" class="green link-hvr">Update Profile Image</a></td>
                </tr>
            </table>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>

</html>