<?php 

    require_once ('../model/room_model.php');

    function fetchallrooms()
    {
        return showallrooms();
    }
    function fetchShowableRooms()
    {
        return onlyShowableRooms();
    }
    function fetchroom($room_id)
    {
        return showroom($room_id);
    }
?>
