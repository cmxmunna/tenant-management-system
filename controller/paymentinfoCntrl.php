<?php 

    require_once ('../model/payment_model.php');

    function fetchallpayments()
    {
        return showallpayments();
    }
    function fetchTenantPaymentHistory($tenant_id)
    {
        return showTenantPaymentHistory($tenant_id);
    }
    function fetchTenantPayment($transection_id)
    {
        return showTenantPayment($transection_id);
    }
?>
