<?php
require_once '../model/db_connect.php';

function TransactionSearch($ajax_query)
    {
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `payment` where tenant_name LIKE '%$ajax_query%' OR phone_number LIKE '%$ajax_query%'";
    
        try {
            $stmt = $conn->query($selectQuery);
        } 
        catch (PDOException $e) 
        {
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $rows;
    }
    function fetchTransactionSearch($ajax_query)
    {
        return TransactionSearch($ajax_query);
    }
    $payments = fetchTransactionSearch($_GET['ajax_query']);
?>

<table border="1" class="usr-table">
    <thead>
        <tr>
            <th>Tenant Name</th>
            <th>Tenant ID</th>
            <th>Phone Number</th>
            <th>Room No</th>
            <th>Bill Month</th>
            <th>Amount Paid</th>
            <th>Payment Method</th>
            <th>Status</th>
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
            <td><?php echo $payment['status'] ?></td>
            <td><?php echo $payment['transaction_time'] ?></td>
            <td><a href="../view/update_tenantPayment.php?transaction_id=<?php echo $payment['transaction_id'] ?>"><span class="btn-action error">Update</span></a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>