<?php 
    include '../controller/session.php';
    require_once '../room_controller/roominfoCntrl.php'; 
    $rooms = fetchallrooms();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>All Room List</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <h1 class="color-cyan">ADD NEW ROOM</h1>
            <a href="../room_view/add_room.php" class="btn-action link-hvr">ADD NEW ROOM</a> <br><br>
            <h1 class="color-cyan">ALL ROOM LIST</h1>
            <table border="1" class="usr-table">
                <thead>
                    <tr>
                        <th>Room ID</th>
                        <th>House Address</th>
                        <th>Room No</th>
                        <th>Rent Price</th>
                        <th>Room Details</th>
                        <th>Booked</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rooms as $i => $room): ?>
                        <tr>
                            <td><a href="../room_view/view_roomDetails.php?room_id=<?php echo $room['room_id'] ?>"><?php echo $room['room_id'] ?></a></td>
                            <td><?php echo $room['house_address'] ?></td>
                            <td><a href="../room_view/view_roomDetails.php?room_id=<?php echo $room['room_id'] ?>"><?php echo $room['room_no'] ?></a></td>
                            <td><?php echo $room['rent'] ?></td>
                            <td><?php echo $room['room_details'] ?></td>
                            <td><?php echo $room['booked'] ?></td>
                            <td><img width="120px" src="../resources/img/room_img/<?php echo $room['image'] ?>" alt="<?php echo $room['room_no'] ?>"></td>
                            <td>
                                <a href="../room_view/update_roomDetails.php?room_id=<?php echo $room['room_id'] ?>" class="green"><span class="btn-action">&nbsp;&nbsp;Edit &nbsp;&nbsp;</span></a> <br><br>
                                <a href="../room_controller/delete_roomCntrl.php?room_id=<?php echo $room['room_id'] ?>" onclick="return confirm('Are you sure want to delete this ROOM?')"><span class="btn-action error">Delete</span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br><br><br><br><br>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>