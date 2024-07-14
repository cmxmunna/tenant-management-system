<?php 
    include '../controller/session.php';
    require_once '../controller/paymentinfoCntrl.php'; 
    $payments = fetchTenantPayment($_GET['transaction_id']);

    $message = '';
    if(isset($_POST['transaction_update']))
    {  
        $data['status'] = $_POST['status'];
        if (UpdateTenantPayment($_POST['transaction_id'], $data)) 
        {
            $message = "✔ Record Updated Successfully by ".$Name;
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../resources/img/icon/favicon.png">
    <link href="../resources/stylesheet/ife.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Tenant Transaction</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
        <a href="../view/Track_tenantPayment.php"><span class="btn-action error">← Back</span></a>
            <h1 class="color-cyan">Tenant Transaction Update</h1>
            <table border="1" class="usr-table">
                <thead>
                    <tr>
                        <th>Tenant Name</th>
                        <th>Phone Number</th>
                        <th>Room No</th>
                        <th>Bill Month</th>
                        <th>Amount Paid</th>
                        <th>Payment Method</th>
                        <th>Transaction ID</th>
                        <th>Transaction Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($payments as $i => $payment): ?>
                        <tr>
                            <td><a href="../tenant_view/view_tenantProfile.php?tenant_id=<?php echo $payment['tenant_id'] ?>"><?php echo $payment['tenant_name'] ?></a></td>
                            <td><?php echo $payment['phone_number'] ?></td>
                            <td><?php echo $payment['room_no'] ?></td>
                            <td><?php echo $payment['bill_month'] ?></td>
                            <td><?php echo $payment['amount'] ?></td>
                            <td><?php echo $payment['payment_method'] ?></td>
                            <td><?php echo $payment['transaction_id'] ?></td>
                            <td><?php echo $payment['transaction_time'] ?></td>
                            <td>
                                <form action='' method='post'>
                                    <select name='status' id='status'>
                                        <option value='Successful'>Successful</option>
                                        <option value='Unsuccessful'>Unsuccessful</option>
                                        <option value='Payment Refunded'>Refund Payment</option>
                                    </select>
                                    <input type="hidden" name="transaction_id" value="<?php echo $_GET['transaction_id']; ?>">
                                    <input type='submit' name='transaction_update' value='UPDATE' class="btn-action">
                                </form>
                                <a href="../payment_controller/delete_paymentCntrl.php?tenant_id=<?php echo $user['transaction_id'] ?>" onclick="return confirm('Are you sure want to delete this Transaction?')"><span class="btn-action error">Delete</span></a><br><br>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="center green"><span><?php if(isset($message)) { echo $message; }?></span></div>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>