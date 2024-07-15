<?php 
    include '../controller/session.php';
    include '../room_controller/update_roomCntrl.php';
    require_once '../room_controller/roominfoCntrl.php';
    $room = fetchroom($_GET['room_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Update Room Details</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <a href="../room_view/view_all_rooms.php"><span class="btn-action error">← Back</span></a>
            <form method="post" action="" enctype="multipart/form-data">
                <div>
                    <h1 class="color-cyan">UPDATE ROOM DETAILS</h1>
                    <table>
                        <tr>
                            <td><label for="house_address">House Address</label></td>
                            <td >: <input type="text" id="house_address" name="house_address" value="<?php echo $room['house_address'] ?>" ></td>
                        </tr>
                        <tr>
                            <td><label for="room_no">Room NO</label></td>
                            <td>: <input type="text" id="room_no" name="room_no" value="<?php echo $room['room_no'] ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="rent">Rent Price</label></td>
                            <td>: <input type="text" id="rent" name="rent" value="<?php echo $room['rent'] ?>"></td>
                        </tr>
                        <tr>
                            <td><label for="room_details">Room Details</label></td>
                            <td>: <input type="text" id="room_details" name="room_details" value="<?php echo $room['room_details'] ?>" ></td>
                        </tr>
                        <tr>
                            <td><label for="booked">Booked?</label></td>
                            <td>: 
                            <input type="radio" id="yes" name="booked" value="Yes" <?php if (isset($room['booked']) && $room['booked']=="Yes") echo "checked";?>><label for="yes" class="green"> Yes</label>
                            <input type="radio" id="no" name="booked" value="No" <?php if (isset($room['booked']) && $room['booked']=="No") echo "checked";?>><label for="no" class="red"> No</label>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="room_id" value="<?php echo $_GET['room_id']; ?>">
                                <input type="submit" name="updateroom" class="btn" value="UPDATE">
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