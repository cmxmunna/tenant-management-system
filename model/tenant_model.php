<?php
    require_once 'db_connect.php';

    // Add New Tenant 
    function addNewTenant($data)
    {
        $conn = db_conn();
        $selectQuery = "INSERT into tenantinfo (tenant_id, name, father, dob, gender, religion, maritial_status, occupation, nid, phone_number, password, permanent_address, room_no, advance, monthly_bill, rent_date, balance, status, usertype, image)
        VALUES (:tenant_id, :name, :father, :dob, :gender, :religion, :maritial_status, :occupation, :nid, :phone_number, :password, :permanent_address, :room_no, :advance, :monthly_bill, :rent_date, :balance, :status, :usertype, :image)";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
                ':tenant_id' => $data['tenant_id'],
                ':name' => $data['name'],
                ':father' => $data['father'],
                ':dob' => $data['dob'],
                ':gender' => $data['gender'],
                ':religion' => $data['religion'],
                ':maritial_status' => $data['maritial_status'],
                ':occupation' => $data['occupation'],
                ':nid' => $data['nid'],
                ':phone_number' => $data['phone_number'],
                ':password' => $data['password'],
                ':permanent_address' => $data['permanent_address'],
                ':room_no' => $data['room_no'],
                ':advance' => $data['advance'],
                ':monthly_bill' => $data['monthly_bill'],
                ':balance' => $data['balance'],
                ':rent_date' => $data['rent_date'],
                ':status' => $data['status'],
                ':usertype' => $data['usertype'],
                ':image' => $data['image']
            ]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }

    // Update Tenant Profile
    function updateTenantRecord($tenant_id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE tenantinfo SET name = ?, father = ?, dob = ?, gender = ?, religion = ?, maritial_status = ?, occupation = ?, nid = ?, phone_number = ?, permanent_address = ?, room_no = ?, monthly_bill = ?, balance = ?, rent_date = ?, status = ? where tenant_id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['name'], $data['father'], $data['dob'], $data['gender'], $data['religion'], $data['maritial_status'], $data['occupation'], $data['nid'], $data['phone_number'], $data['permanent_address'], $data['room_no'], $data['monthly_bill'], $data['balance'], $data['rent_date'], $data['status'], $tenant_id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }

    // Tenant Profile Image Change
    function updateUserImage($tenant_id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE tenantinfo SET image = ? where tenant_id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['image'], $tenant_id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }
    
    //Delete Tenant
    function deleteTenant($tenant_id)
    {
        $conn = db_conn();
        $selectQuery = "DELETE FROM `tenantinfo` WHERE `tenant_id` = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$tenant_id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }

    //Admin Password Change
    function updateUserPassword($user_id, $data)
    {
        $conn = db_conn();
        $selectQuery = "UPDATE userinfo SET password = ? where user_id = ?";
        try
        {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
            $data['password'], $user_id]);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $conn = null;
        return true;
    }


    // Admin CRUD START
    function showalltenants()
    {
        $conn = db_conn();
        $selectQuery = 'SELECT * FROM `tenantinfo` ';
        try
        {
            $stmt = $conn->query($selectQuery);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    
    function showtenant($tenant_id)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `tenantinfo` where tenant_id = ?";
    
        try {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$tenant_id]);
        } 
        catch (PDOException $e) 
        {
            echo $e->getMessage();
        }
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $row;
    }
?>