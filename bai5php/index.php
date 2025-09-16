<?php
// Khai báo biến điểm
$score = 7;

// Hiển thị điểm
echo "Điểm: $score <br>";

// Sử dụng câu lệnh điều kiện IF để xếp loại dựa vào điểm
if ($score >= 8) {
    // Nếu điểm lớn hơn hoặc bằng 8 thì xếp loại Giỏi
    echo "Xếp loại: Giỏi";
} elseif ($score >= 5) {
    // Nếu điểm lớn hơn hoặc bằng 5 thì xếp loại Khá
    echo "Xếp loại: Khá";
} else {
    // Nếu điểm nhỏ hơn 5 thì xếp loại Trung bình
    echo "Xếp loại: Trung bình";
}
?>