<?php 
    include '../controller/session.php';
    include '../room_controller/add_roomCntrl.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Add New Room</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <a href="../room_view/view_all_rooms.php" class="btn-action link-hvr">← Back</a>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return RoomAddValidation()" method="post" enctype="multipart/form-data">
                <div class="">
                    <h1 class="color-cyan">ADD NEW ROOM</h1>
                    <table>
                        <tr>
                            <td><label for="room_no">Room NO</label></td>
                            <td>: <input type="text" id="room_no" name="room_no">
                            <span id="room_noErr" class="error">*</span></td>
                        </tr>
                        <tr>
                            <td><label for="rent">Rent Price</label></td>
                            <td>: <input type="text" id="rent" name="rent">
                                <span id="rentErr" class="error">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="house_address">House Address</label></td>
                            <td>: <textarea id="house_address" name="house_address" rows="4" cols="23"></textarea>
                            <span id="House_addressErr" class="error">*</span></td>
                        </tr>
                        <tr>
                            <td><label for="room_details">Room Details</label></td>
                            <td>: <textarea id="room_details" name="room_details" rows="4" cols="23"></textarea>
                                <span id="room_detailsErr" class="error">*</span>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="booked">Booked?</label></td>
                            <td>: 
                            <input type="radio" id="no" name="booked" value="No" <?php echo "checked";?>><label for="no" class="red"> No</label>
                            <input type="radio" id="yes" name="booked" value="Yes"><label for="yes" class="green"> Yes</label>
                            <span id="bookedErr" class="error">*</span> <br><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <fieldset>
                                <legend>Room Image</legend>
                                <input type="file" name="image" id="image">
                                <span id="imageErr" class="error">*</span>
                                </fieldset> <br>
                            </td>
                        </tr>
                        </table>
                        <table >
                        <tr>
                            <td width="200px">
                                <input type="submit" name="addroom" value="submit" class="btn">
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
        <br><br><br><br><br><br><br><br><br>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
    <script src="../resources/js/ife.js?v=<?php echo time(); ?>"></script>
</body>
</html>