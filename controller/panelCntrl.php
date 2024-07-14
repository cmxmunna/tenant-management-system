<?php
    if($Type=="Admin")
    {
        include('../panel/adminpanel.php');
    }
    else if($Type=="User")
    {
        include('../panel/userpanel.php');
    } 
?>