<?php
function isPrime($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}


echo "DANH SÁCH SỐ NGUYÊN TỐ TỪ 1 ĐẾN 100:<br>";
for ($number = 1; $number <= 100; $number++) {
    if (isPrime($number)) {
        echo $number . " ";
    }
}
?>