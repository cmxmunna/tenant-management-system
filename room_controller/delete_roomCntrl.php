<?php 
    require_once '../model/room_model.php';

    if(deleteroom($_GET['room_id'])) 
    {
        header('Location: ../room_view/view_all_rooms.php');
    }
?>