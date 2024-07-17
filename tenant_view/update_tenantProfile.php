<?php 
    include "../controller/session.php" ;
    include "../tenant_controller/update_tenantProfileCntrl.php" ;
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
    <title>Edit Profile</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>

    <?php
        require_once '../model/room_model.php';
        function fetchShowableRooms()
        {
            return onlyShowableRooms();
        }
        $rooms = fetchShowableRooms();
    ?>
        <section>
        <a href="../tenant_view/view_all_tenants.php"><span class="btn-action error">← Back</span></a>
            <form method="post" action="">
                <div>
                    <h1><legend>EDIT PROFILE</legend></h1>
                    <table>
                        <tr>
                            <td><label for="name">Name</label></td>
                            <td>: <input type="text" id="name" name="name" value="<?php echo $tenant['name'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="father">Father Name</label></td>
                            <td>: <input type="father" id="father" name="father" value="<?php echo $tenant['father'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="dob">Date of Birth</label></td>
                            <td>: <input type="text" id="dob" name="dob" value="<?php echo $tenant['dob'] ?>">
                            <br><span>&nbsp;&nbsp;<i>(yyyy-mm-dd)</i></span></td>
                        </tr>
                        <tr>
                            <td><label for="gender">Gender</label></td>
                            <td>: 
                            <input type="radio" name="gender" value="Male" <?php if (isset($tenant['gender']) && $tenant['gender']=="Male") echo "checked";?>>Male
                            <input type="radio" name="gender" value="Female" <?php if (isset($tenant['gender']) && $tenant['gender']=="Female") echo "checked";?>>Female
                            <input type="radio" name="gender" value="Other" <?php if (isset($tenant['gender']) && $tenant['gender']=="Other") echo "checked";?>>Other
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <fieldset>
                                <legend>Religion</legend>
                                <select name="religion" id="religion">
                                    <option value="<?php echo $tenant['religion'] ?>"><?php echo $tenant['religion'] ?></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hinduism">Hinduism</option>
                                    <option value="Christianity">Christianity</option>
                                </select>
                                </fieldset>
                            </td>
                        </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Maritial Status</legend>
                            <select name="maritial_status" id="maritial_status">
                                <option value="<?php echo $tenant['maritial_status'] ?>"><?php echo $tenant['maritial_status'] ?></option>
                                <option value="Unmarried">Unmarried</option>
                                <option value="Married">Married</option>
                            </select>
                            </fieldset>
                        </td>
                    </tr>
                        <tr>
                            <td><label for="occupation">Occupation</label></td>
                            <td>: <input type="text" id="occupation" name="occupation" value="<?php echo $tenant['occupation'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="nid">NID Number</label></td>
                            <td>: <input type="text" id="nid" name="nid" value="<?php echo $tenant['nid'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="phone_number">Phone Number</label></td>
                            <td>: <input type="text" id="phone_number" name="phone_number" value="<?php echo $tenant['phone_number'] ?>">
                            </td>
                        </tr>
                    <tr>
                        <td><label for="permanent_address">P. Address</label></td>
                        <td>: <textarea id="permanent_address" name="permanent_address" rows="4" cols="23"><?php echo $tenant['permanent_address'] ?></textarea> </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Select Room No</legend>
                            <select name="room_no" id="room_no">
                                <option value="<?php echo $tenant['room_no'] ?>"><?php echo $tenant['room_no'] ?></option>
                                <?php foreach ($rooms as $i => $room): ?>
                                <option value="<?php echo $room['room_no'] ?>"><?php echo $room['room_no'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="monthly_bill">Monthly Bill</label></td>
                        <td>: <input type="text" id="monthly_bill" name="monthly_bill" value="<?php echo $tenant['monthly_bill'] ?>">
                    </tr>
                    <tr>
                        <td><label for="balance">Balance</label></td>
                        <td>: <input type="text" id="balance" name="balance" value="<?php echo $tenant['balance'] ?>">
                    </tr>
                    <tr>
                        <td>
                            <label for="rent_date">Rent Date</label></td>
                            <td>: <input type="text" value="<?php echo $tenant['rent_date'] ?>" date_format="dd/mm/yyy" id="rent_date" name="rent_date" min="2024-01-01" max="2028-12-31">
                            <br><span>&nbsp;&nbsp;<i>(yyyy-mm-dd)</i></span></td>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Status</legend>
                            <select name="status" id="status">
                                <option value="<?php echo $tenant['status'] ?>"><?php echo $tenant['status'] ?></option>
                                <option value="Current Tenant">Current Tenant</option>
                                <option value="Not a current Tenant">Not a current Tenant</option>
                            </select>
                            </fieldset>
                        </td>
                    </tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="tenant_id" value="<?php echo $_GET['tenant_id']; ?>">
                                <input type="submit" name="update" value="Update" class="btn">
                            </td>
                        </tr>
                    </table>
                    <div class="green"><span><?php if(isset($message)) { echo $message; }?></span></div>
                </div>
            </form>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>