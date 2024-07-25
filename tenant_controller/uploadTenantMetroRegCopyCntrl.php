<?php
    require_once '../model/tenant_model.php';
    
    $message="";

    if(isset($_POST['upload']))
    {
        $img_name = $_FILES['image']['name'];
        $img_type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);

        $extensions = ["jpeg", "png", "jpg"];
        if(in_array($img_ext, $extensions) === true)
        {
            $time = time();
            $new_img_name = $time.$img_name;
            $target_dir = "../resources/img/tenant_img/contractScanCopy/";
            $target_file = $target_dir .$new_img_name;
            $data['image'] = $new_img_name;
            if(move_uploaded_file($tmp_name, $target_file))
            {
                // $message = "upload Success";
                if (uploadTenantMetroRegCopy($_POST['tenant_id'], $data)) 
                {
                    $message = "Document uploaded successfully.";
                }
            }
        }
        else
        {
            $message = "Please upload an image file - jpeg, png, jpg";
        }
    }