<?php  
    require_once '../model/tenant_model.php';
    require_once '../model/room_model.php';
    
    $message = '';

    if(isset($_POST['update']))
    {  
        
        $data['name']         = $_POST['name'];
        $data['father']       = $_POST['father'];
        $data['dob']          = $_POST['dob'];
        $data['gender']       = $_POST['gender'];
        $data['religion']     = $_POST['religion'];
        $data['maritial_status']     = $_POST['maritial_status'];
        $data['occupation']   = $_POST['occupation'];
        $data['nid']          = $_POST['nid'];
        $data['phone_number'] = $_POST['phone_number'];
        $data['permanent_address']   = $_POST['permanent_address'];
        $data['room_no']      = $_POST['room_no'];
        $data['monthly_bill']        = $_POST['monthly_bill'];
        $data['balance']      = $_POST['balance'];
        $data['rent_date']           = $_POST['rent_date'];
        $data['status']       = $_POST['status'];
        $booked = "Yes";
        $data['booked']       =  $booked;
            
        if (updateTenantRecord($_POST['tenant_id'], $data)) 
        {
            $message = "✔ Record Updated Successfully by ".$Name;
        }
        else
        {
            $message = "⚠ Tenant Dada was not saved ⚠";
        }

        if (updateRoomBookingInfo($data)){}
    } 
    
?>