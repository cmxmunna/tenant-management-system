<?php  
require_once '../model/room_model.php';

    $message = '';

    if(isset($_POST['updateroom']))
    {  
        $data['house_address']    = $_POST['house_address'];
        $data['room_no']          = $_POST['room_no'];
        $data['rent']             = $_POST['rent'];
        $data['room_details']     = $_POST['room_details'];  
        $data['booked']           = $_POST['booked'];
        if (updateroom($_POST['room_id'], $data)) 
        {
            $message = "✔ Room Details Updated Successfully by ".$Name." ✩";
        }
        else
        {
            $message = "Problem occured while updaing...";
        }
    }
?>