<?php
include "db_connect.php";

$customer_name = $_POST['customer_name'];
$product_name  = $_POST['product_name'];
$quantity      = $_POST['quantity'];
$price         = $_POST['price'];

$sql = "INSERT INTO orders (customer_name, product_name, quantity, price)
        VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssid", $customer_name, $product_name, $quantity, $price);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Status</title>
    <style>
        body{
            font-family:Arial, sans-serif;
            background:linear-gradient(135deg,#4facfe,#00f2fe);
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            margin:0;
        }
        .box{
            background:#fff;
            padding:30px;
            border-radius:12px;
            text-align:center;
            box-shadow:0 8px 20px rgba(0,0,0,0.2);
            width:350px;
        }
        h2{ color:#28a745; }
        a{
            display:inline-block;
            margin-top:15px;
            padding:10px 20px;
            background:#2196F3;
            color:white;
            text-decoration:none;
            border-radius:6px;
        }
        a:hover{ background:#1976D2; }
    </style>
</head>
<body>

<div class="box">

<?php
if($stmt->execute()){
    echo "<h2>Order Placed Successfully!</h2>";
    echo "<a href='view_orders.php'>View Orders</a>";
}else{
    echo "<h2 style='color:red;'>Error: ".$stmt->error."</h2>";
}

$stmt->close();
$conn->close();
?>

</div>

</body>
</html>