<?php
    require_once '../model/tenant_model.php';
    require_once '../model/room_model.php';
    $phone_numberExist = $genderErr ="";
    $phone_number ='';
    $message = '';
    $error = '';

    if(isset($_POST['addTenant'])) 
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM tenantinfo WHERE phone_number = :phone_number";
        try
        {
            $stmt = $conn-> prepare($selectQuery);  
            $stmt->execute(  
                array(  
                    'phone_number'     =>     $_POST["phone_number"], 
                )  
            );  
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();  
            if($count > 0)  
            {  
                $phone_number = $row['phone_number'];
            }  
            if($phone_number == $_POST['phone_number'])
            {
                $phone_numberExist = "⚠ phone_number ".$_POST['phone_number']." is already Stroed in server!";
            }
            else
            {
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $img_explode = explode('.',$img_name);
                $img_ext = end($img_explode);
                $extensions = ["jpeg", "png", "jpg"];
                if(in_array($img_ext, $extensions) === true)
                {
                    $ran_id = rand(time(), 18360251);
                    $time = time();
                    $new_img_name = $time.$img_name;
                    $target_dir = "../resources/img/tenant_img/";
                    $target_file = $target_dir .$new_img_name;

                    $data['tenant_id']     = md5($ran_id);
                    $data['name']     = $_POST['name'];
                    $data['father']    = $_POST['father'];
                    $data['dob'] = $_POST['dob'];
                    $data['gender']    = $_POST['gender'];
                    $data['religion']  = $_POST['religion'];
                    $data['maritial_status']   = $_POST['maritial_status'];
                    $data['occupation']   = $_POST['occupation'];
                    $data['nid']   = $_POST['nid'];
                    $data['phone_number']   = $_POST['phone_number'];
                    $data['password'] = password_hash($_POST['phone_number'], PASSWORD_BCRYPT, ["cost" => 12]);
                    $data['permanent_address']   = $_POST['permanent_address'];
                    $data['room_no']   = $_POST['room_no'];
                    $data['advance']   = $_POST['advance'];
                    $data['monthly_bill']   = $_POST['monthly_bill'];
                    $balance = $_POST['monthly_bill'] - $_POST['advance'];
                    $data['balance']   = $balance;
                    $data['rent_date']   = $_POST['rent_date'];
                    $data['status']   = $_POST['status'];
                    $usertype = "Tenant";
                    $data['usertype'] = $usertype;
                    $booked = "Yes";
                    $data['booked'] = $booked;
                    $data['image'] = $new_img_name;

                        
                    if(move_uploaded_file($tmp_name, $target_file)){}
                    if (addNewTenant($data))
                    {
                        $message = "<i>Tenant Record Saved Successfully</i>";
                    }
                    else
                    {
                        $message = "⚠ Tenant Dada was not saved ⚠";
                    }

                    if (updateRoomBookingInfo($data))
                    {
                        $message = "<i>Tenant Dada Saved Successfully</i>";
                    }
                    else
                    {
                        $message = "⚠ Tenant Dada was not saved ⚠";
                    }
                }
            } 
        }  
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
?>