<?php
require_once "Database.php";

$db = new Database();
$pdo = $db->connect();

// 1: Tạo mảng kết hợp chứa thông tin sản phẩm
$stmt = $pdo->query("SELECT name, price, quantity FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

//  2: Hiển thị thông tin của tất cả sản phẩm trong mảng
echo "<h2>CỬA HÀNG JJ</h2>";
echo "<h3>DANH SÁCH SẢN PHẨM</h3>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Tên sản phẩm</th><th>Giá</th><th>Số lượng</th></tr>";
foreach ($products as $sp) {
    echo "<tr>";
    echo "<td>" . $sp['name'] . "</td>";
    echo "<td>" . number_format($sp['price']) . "</td>";
    echo "<td>" . $sp['quantity'] . "</td>";
    echo "</tr>";
}
echo "</table>";

//  3: Viết hàm để tính tổng giá trị tất cả sản phẩm (price * quantity)
function calculateTotalValue($products) {
    $total = 0;
    foreach ($products as $sp) {
        $total += $sp['price'] * $sp['quantity'];
    }
    return $total;
}

$totalValue = calculateTotalValue($products);
echo "<br>Tổng giá trị kho hàng: " . number_format($totalValue) . " VNĐ";
?>