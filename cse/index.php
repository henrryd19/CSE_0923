<?php
    // Lập trình PHP căn bản: học so sánh
    $data = 5;
    $data = "Hello from PHP";
    $data = 'Hello from PHP'; //Nháy đơn dùng khi ko chứa biến >Nhanh hơn
    // echo "Text Demo 1: $data";
    // echo 'Text Demo 2: $data';
    echo "<h1>$data</h1>";
    // echo "<h1 style="color:red">$data</h1>"; //Lỗi
    echo "<h1 style='color:red'>$data</h1>"; //Đan xen: Ngoài kép, trong đơn
    echo '<h1 style="color:red">$data</h1>'; //Đan xen: Ngoài đơn, trong kép

    echo '<h1 style="color:red">'.$data.'</h1>'; //Tách và nối chuỗi

    //Mảng index: 
    $indexColorArr = ['red','blue','green'];
    echo "<h1 style='color:$indexColorArr[1]'>$data</h1>"; //Đan xen

    //Mảng assoc: 
    $assocColorArr = ['color1'=>'red','color2'=>'blue','color3'=>'green'];
    echo "<h1 style='color:".$assocColorArr['color2']."'>$data</h1>"; //Tách và nối
    echo "<h1 style='color:{$assocColorArr['color3']}'>$data</h1>"; //Cô lập biến với {}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            echo $data;
        ?>
    </h1>

    <select name="" id="">
        
        <?php
            for($i=0;$i<10;$i++){
                // echo "<option value=''>$i</option>";
        ?>
                <option value=""><?= $i ?></option>
        <?php
            }
        ?>
    </select>
</body>
</html>