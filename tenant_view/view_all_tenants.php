<?php 
    include '../controller/session.php';
    require_once '../tenant_controller/tenantinfoCntrl.php';
    $users = fetchalltenants();
    
    if($_SESSION['usertype'] == "Admin"){}
    else{header("location: ../controller/hackerCntrl.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>All Tenants List</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
            <h1 class="color-cyan">ADD NEW TENANT</h1>
            <a href="../tenant_view/add_tenant.php" class="btn-action link-hvr">ADD NEW TENANT</a> <br><br>
            

            
            <br>
            <h1 class="color-cyan">ALL TENANT LIST</h1>
            <table border="1" class="usr-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Father</th>
                        <th>NID</th>
                        <th>Phone</th>
                        <th>P. Address</th>
                        <th>Room No</th>
                        <th>Balance</th>
                        <th>Status</th>
                        <th>Img</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $i => $user): ?>
                        <tr>
                            <td><a href="../tenant_view/view_tenantProfile.php?tenant_id=<?php echo $user['tenant_id'] ?>"><?php echo $user['name'] ?></a></td>
                            <td><?php echo $user['father'] ?></td>
                            <td><?php echo $user['nid'] ?></td>
                            <td><?php echo $user['phone_number'] ?></td>
                            <td><?php echo $user['permanent_address'] ?></td>
                            <td><?php echo $user['room_no'] ?></td>
                            <td class="red"><?php echo $user['balance'] ?> Tk</td>
                            <td><?php echo $user['status'] ?></td>
                            <td><img width="70px" src="../resources/img/tenant_img/<?php echo $user['image'] ?>" alt="<?php echo $user['name'] ?>"></td>
                            <td>
                                <a href="../tenant_view/update_tenantProfile.php?tenant_id=<?php echo $user['tenant_id'] ?>" class="green"><span class="btn-action">&nbsp;&nbsp;Edit &nbsp;&nbsp;</span></a> <br><br>
                                <a href="../tenant_controller/delete_tenantCntrl.php?tenant_id=<?php echo $user['tenant_id'] ?>" onclick="return confirm('Are you sure want to delete this Tenant?')"><span class="btn-action error">Delete</span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br><br><br><br><br><br><br><br><br><br>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>