<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<aside class="menu bottom-mar-500">
    <div class="font-size-30 m-l-10 pad-10">Admin Account</div>
    <div class="top-mar-10 user-area">
        <i class="fas fa-address-card font-size-20 bottom-mar-10"></i></i><strong> Profile Settings</strong><br>
        <a href="../view/dashboard.php"><i class="fas fa-tablet-alt"></i> Dashboard</a> <br>
        <a href="../admin_view/view_adminSessionProfile.php?user_id=<?php echo $user_id ?>"><i class="fas fa-id-card"></i> View Profile</a> <br>
    </div>
    <div class="admin-area">
        <i class="fas fa-user-shield font-size-20 bottom-mar-10"></i><strong> Administration</strong><br>
        <a href="../admin_view/view_all_admins.php"><i class="fas fa-users-cog"></i> Admins</a>
    </div>
    <div class="ipack-area">
        <i class="fas fa-house-user font-size-20 bottom-mar-10"></i><strong> Mridha Recidence</strong></a> <br>
        <a href="../internetpack_view/view_all_internetpacks.php"><i class="fas fa-home"></i> Rooms</a> <br>
        <a href="../tenant_view/view_all_tenants.php"><i class="fas fa-user"></i> Tenant</a> 
    </div>
    <div class="payment-area">
        <i class="fas fa-file-invoice-dollar font-size-20 bottom-mar-10"></i><strong> Track Payment</strong></a> <br>
        <a href="../view/Track_tenantPayment.php"><i class="fas fa-file-invoice-dollar"></i> Tenant Payment</a>
    </div>
    <p class="m-l-10 pad-10"><a href="../controller/logout.php"><i class="fas fa-sign-out-alt bottom-mar-50"></i> Logout</a></p>
</aside> 