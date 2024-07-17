<?php 
    include '../controller/session.php';
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
    <title>Room Details</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
        <?php include('../controller/panelCntrl.php'); ?>
        <section>
        <input type="button" onclick="goBack()" class="link-hvr" value="← Back">
            <h1 class="color-cyan">ROOM DETAILS</h1>
            <table>
                <tr>
                    <td><label for="room_no">Room No</label></td>
                    <td>: <label><?php echo $room['room_no'] ?></label>
                    </td>
                    <td rowspan="9">
                        <img width="200px" src="../resources/img/room_img/<?php echo $room['image'] ?>"
                            alt="<?php echo $room['room_no'] ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="rent">Rent Price</label></td>
                    <td>: <label><?php echo $room['rent'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="house_address">House Address</label></td>
                    <td>: <label><?php echo $room['house_address'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="room_details">Room Details</label></td>
                    <td>: <label><?php echo $room['room_details'] ?></label></td>
                </tr>
                <tr>
                    <td><label for="booked">Booked?</label></td>
                    <td>: <label><?php echo $room['booked'] ?></label></td>
                </tr>
                <tr>
                    <td><a href="../room_view/update_roomDetails.php?room_id=<?php echo $room['room_id'] ?>" class="green link-hvr">Update</a></td>
                    <td></td>
                    <td><a href="../room_view/update_roomImage.php?room_id=<?php echo $room['room_id'] ?>" class="green link-hvr">Update Image</a></td>
                </tr>
            </table>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>

</html>