<?php

// Khai báo biến ngày trong tuần (1: Chủ nhật, 2: Thứ hai, ..., 7: Thứ bảy)
$day = 3;

// Hiển thị giá trị ngày
echo "Giá trị ngày: $day <br>";

// Sử dụng switch để xác định tên ngày trong tuần
switch ($day) {
    case 1:
        echo "Hôm nay là Chủ nhật";
        break;
    case 2:
        echo "Hôm nay là Thứ hai";
        break;
    case 3:
        echo "Hôm nay là Thứ ba";
        break;
    case 4:
        echo "Hôm nay là Thứ tư";
        break;
    case 5:
        echo "Hôm nay là Thứ năm";
        break;
    case 6:
        echo "Hôm nay là Thứ sáu";
        break;
    case 7:
        echo "Hôm nay là Thứ bảy";
        break;
    default:
        echo "Giá trị không hợp lệ. Vui lòng nhập số từ 1 đến 7.";
        break;
}
?>;