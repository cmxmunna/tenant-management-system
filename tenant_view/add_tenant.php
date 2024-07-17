<?php 
    include '../controller/session.php';
    include '../tenant_controller/add_tenantCntrl.php';
    
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
    <title>Add Tenant</title>
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
        <a href="../tenant_view/view_all_tenants.php" class="btn-action link-hvr">← Back</a>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return RegistrationValidation()" method="post" enctype="multipart/form-data">
            <div class="">
                <h1 ><legend>ADD NEW TENANT</legend></h1>
                <table>
                    <tr>
                        <td><label for="name">Name</label></td>
                        <td>: <input type="text" id="name" name="name" >
                        <span id="nameErr" class="error">*</span></td>
                    </tr>
                    <tr>
                        <td><label for="father">Father Name</label></td>
                        <td>: <input type="text" id="father" name="father">
                        <span id="fatherErr" class="error">*</span></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="dob">Date of Birth</label></td>
                            <td>: <input type="date" date_format="dd/mm/yyy" id="dob" name="dob" min="1953-01-01" max="2010-12-31">
                            <span id="dobErr" class="error">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" id="Male" value="Male">Male
                            <input type="radio" name="gender" id="Female" value="Female">Female
                            <input type="radio" name="gender" id="Other" value="Other">Other  
                            <span id="genderErr" class="error">*</span>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Religion</legend>
                            <select name="religion" id="religion">
                                <option value="">Select</option>
                                <option value="Islam">Islam</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Christianity">Christianity</option>
                            </select>
                            <span id="religionErr" class="error">*</span>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Maritial Status</legend>
                            <select name="maritial_status" id="maritial_status">
                                <option value="">Select</option>
                                <option value="Unmarried">Unmarried</option>
                                <option value="Married">Married</option>
                            </select>
                            <span id="maritial_statusErr" class="error">*</span>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="occupation">Occupation</label></td>
                        <td>: <input type="text" id="occupation" name="occupation">
                        <span id="occupationErr" class="error">*</span></td>
                    </tr>
                    <tr>
                        <td><label for="nid">NID Number</label></td>
                        <td>: <input type="text" id="nid" name="nid">
                        <span id="nidErr" class="error">*</span></td>
                    </tr>
                    <tr>
                        <td><label for="phone_number">Phone Number</label></td>
                        <td>: <input type="tel" id="phone_number" name="phone_number">
                        <span id="phone_numberErr" class="error">* <?php echo $phone_numberExist ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="permanent_address">P. Address</label></td>
                        <td>: <textarea id="permanent_address" name="permanent_address" rows="4" cols="23"></textarea>
                        <span id="permanent_addressErr" class="error">*</span></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Select Room No</legend>
                            <select name="room_no" id="room_no">
                                <option value="">Show Available Rooms</option>
                                <?php foreach ($rooms as $i => $room): ?>
                                <option value="<?php echo $room['room_no'] ?>"><?php echo $room['room_no'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span id="room_noErr" class="error">*</span>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="advance">Advance</label></td>
                        <td>: <input type="text" id="advance" name="advance">
                        <span id="advanceErr" class="error">*</span></td>
                    </tr>
                    <tr>
                        <td><label for="monthly_bill">Monthly Bill</label></td>
                        <td>: <input type="text" id="monthly_bill" name="monthly_bill">
                        <span id="monthly_billErr" class="error">*</span></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="rent_date">Rent Date</label></td>
                            <td>: <input type="date" date_format="dd/mm/yyy" id="rent_date" name="rent_date" min="2024-01-01" max="2028-12-31">
                            <span id="rent_dateErr" class="error">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Status</legend>
                            <select name="status" id="status">
                                <option value="">Select</option>
                                <option value="Current Tenant">Current Tenant</option>
                                <option value="Not a current Tenant">Not a current Tenant</option>
                            </select>
                            <span id="statusErr" class="error">*</span>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Tenant Image</legend>
                            <input type="file" name="image" id="image">  
                            <span id="imageErr" class="error">*</span>
                            </fieldset> <br>
                        </td>
                    </tr>
                </table>
                    <table>
                        <tr>
                            <td width="200px">
                                <input type="submit" name="addTenant" value="Submit" class="btn">
                            </td>
                            <td>
                                <input type="reset" value="Reset" class="btn">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="top-mar-10 green">
                                <?php  
                                    if(isset($message))  
                                    {  
                                        echo $message;  
                                    }  
                                ?>
                            </td>
                        </tr>
                    </table>
            </div>
        </form> 
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>