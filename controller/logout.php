<?php
    session_start();

    if (isset($_SESSION['username'])) 
    {
        session_destroy();
        header("location: ../tenant_view/tenantlogin.php");
        
    }
    else
    {
        header("location: ../tenant_view/tenantlogin.php");
    }
    
?>