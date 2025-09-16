<?php
$i = 1; // Khởi tạo biến đếm $i bắt đầu từ 1
echo "<ul>"; // Mở thẻ danh sách không thứ tự

while ($i <= 10) { // Vòng lặp while chạy khi $i nhỏ hơn hoặc bằng 10
    echo "<li>Số thứ $i</li>"; // Hiển thị phần tử danh sách với số thứ tự hiện tại
    $i++; // Tăng giá trị của $i lên 1 sau mỗi lần lặp
}

echo "</ul>"; // Đóng thẻ danh sách
?>
