<?php
    require_once '../model/room_model.php';

    $message = '';
    $error = '';

    if(isset($_POST['addroom'])) 
    {
        $img_name = $_FILES['image']['name'];
        $img_type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);
        $extensions = ["jpeg", "png", "jpg"];
        if(in_array($img_ext, $extensions) === true)
        {
            $ran_id = rand(time(), 36025);
            //$ran_id = time() -799990;
            $time = time();
            $new_img_name = $time.$img_name;
            $target_dir = "../resources/img/room_img/";
            $target_file = $target_dir .$new_img_name;

            //$data['room_id']  = md5($ran_id);
            $data['room_id']  = $ran_id;
            $data['house_address']     = $_POST['house_address'];
            $data['room_no']    = $_POST['room_no'];
            $data['rent'] = $_POST['rent'];
            $data['room_details'] = $_POST['room_details'];  
            $data['booked']     = $_POST['booked'];
            $data['image'] = $new_img_name;

            if(move_uploaded_file($tmp_name, $target_file))
            {
                if(addroom($data)) 
                {
                    $message = "<i>New Room Added by $Name</i>";
                }
                else
                {
                    $error = "<i>Dada was not saved!</i>";
                }
            }
        } 
        else
        {
            $error = " Upload a valid Image ";
        }
    }
     
?>