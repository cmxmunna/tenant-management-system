<?php 
    require_once '../model/payment_model.php';
    
    if(deletepayment($_GET['transection_id'])) 
    {
        header('Location: ../view/Track_tenantPayment.php');
    }
?>