<?php
include "db_connect.php";

$result = $conn->query("SELECT * FROM orders ORDER BY order_date DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Orders</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:linear-gradient(135deg,#4facfe,#00f2fe);
            padding:40px;
        }

        h2{
            text-align:center;
            color:white;
            margin-bottom:25px;
        }

        table{
            width:90%;
            margin:auto;
            border-collapse:collapse;
            background:white;
            border-radius:10px;
            overflow:hidden;
            box-shadow:0 8px 20px rgba(0,0,0,0.2);
        }

        th{
            background:#2196F3;
            color:white;
            padding:12px;
        }

        td{
            padding:10px;
            text-align:center;
            border-bottom:1px solid #ddd;
        }

        tr:hover{
            background:#f5f5f5;
        }

        .btn{
            display:inline-block;
            margin-top:25px;
            padding:12px 20px;
            background:#2196F3;
            color:white;
            text-decoration:none;
            border-radius:6px;
        }

        .btn:hover{
            background:#1976D2;
        }

        .center{
            text-align:center;
        }
    </style>

</head>
<body>

<h2>All Orders</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Customer</th>
        <th>Product</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Date</th>
    </tr>

<?php while($row = $result->fetch_assoc()){ ?>

    <tr>
        <td><?php echo $row['order_id']; ?></td>
        <td><?php echo $row['customer_name']; ?></td>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['quantity']; ?></td>
        <td>₹<?php echo $row['price']; ?></td>
        <td><?php echo $row['order_date']; ?></td>
    </tr>

<?php } ?>

</table>

<?php $conn->close(); ?>

<div class="center">
    <a href="index.html" class="btn">Place Another Order</a>
</div>

</body>
</html>