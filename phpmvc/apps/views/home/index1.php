<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
<!--    Lấy ra danh sách tenbaihat từ đâu đó và hiển thị ở đây -->
<?php
    // Thêm bài hát từ mảng dữ liệu
    foreach ($baihat as $baiHatData) {
        echo "<p>{$baiHatData->gettenBaiHat()}</p>";
        echo "<br>";
    }
//     foreach ($theloai as $theLoaiData) {
//         echo "<p>{$theLoaiData->gettenTheLoai()}</p>";
//          echo "<br>";
// }
    
?>
</body>
</html>