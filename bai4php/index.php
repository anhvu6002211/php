<?php

// Biến số
$a = 8;
$b = 3;

// Toán tử số học
$sum = $a + $b;        // Cộng
$diff = $a - $b;       // Trừ
$mul = $a * $b;        // Nhân
$div = $a / $b;        // Chia
$mod = $a % $b;        // Chia lấy dư

// Toán tử so sánh
$isEqual = ($a == $b); // So sánh bằng
$isGreater = ($a > $b);// So sánh lớn hơn

// Toán tử logic
$andLogic = ($a > 5 && $b < 5); // AND
$orLogic = ($a > 10 || $b < 5); // OR

echo "a = $a <br>";
echo "b = $b <br>";
echo "a + b = $sum <br>";
echo "a - b = $diff <br>";
echo "a * b = $mul <br>";
echo "a / b = $div <br>";
echo "a % b = $mod <br>";
echo "a == b: " . ($isEqual ? 'Đúng' : 'Sai') . "<br>";
echo "a > b: " . ($isGreater ? 'Đúng' : 'Sai') . "<br>";
echo "Logic AND: " . ($andLogic ? 'Đúng' : 'Sai') . "<br>";
echo "Logic OR: " . ($orLogic ? 'Đúng': '') . '<br>';
?>