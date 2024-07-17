<?php
    require_once '../model/db_connect.php';
    session_start();

    $message = '';  
   
        if(isset($_POST["login"]))  
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
                    $_SESSION["tenant_id"] = $row['tenant_id'];
                    $_SESSION["name"] = $row['name'];
                    $_SESSION["phone_number"] = $row['phone_number'];
                    $_SESSION["password"] = $row['password'];
                    $_SESSION["usertype"] = $row['usertype'];
                    $_SESSION["gender"] = $row['gender'];
                    $_SESSION["dob"] = $row['dob'];
                    $_SESSION["image"] = $row['image'];

                    if(password_verify($_POST["phone_number"], $_SESSION["password"]))
                    {
                        header("location: ../view/dashboard.php");
                        if(empty($_POST["remember"])) 
                        {
                            setcookie("tenantphone_number","");
                        } 
                        else 
                        {
                            setcookie ("tenantphone_number",$_POST["phone_number"],time() + 86400);
                        }
                    }
                    else  
                    {  
                        $message = '⚠ Incorrect Password ⚠';   
                    }
                } 
                else  
                {  
                    $message = '⚠⚠⚠<br> [' .$_POST["phone_number"].'] -- This Tenant not Exist! ';   
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