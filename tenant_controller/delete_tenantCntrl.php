<?php 
    require_once '../model/tenant_model.php';
    
    if(deleteTenant($_GET['tenant_id'])) 
    {
        header('Location: ../tenant_view/view_all_tenants.php');
    }
?>