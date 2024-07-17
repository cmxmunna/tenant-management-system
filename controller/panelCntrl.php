<?php
    if($Type=="Admin")
    {
        include('../panel/adminpanel.php');
    }
    else if($Type=="Tenant")
    {
        include('../panel/tenantpanel.php');
    } 
?>