<?php 

    require_once ('../model/tenant_model.php');

    function fetchalltenants()
    {
        return showalltenants();
    }
    function fetchtenant($tenant_id)
    {
        return showtenant($tenant_id);
    }
?>
