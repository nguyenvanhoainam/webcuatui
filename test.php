<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Học Tập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #f4c2c2;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4C3222;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
// Khai báo biến để lưu giá trị
$hk1 = $hk2 = $dtb = $ketqua = $xeploai = "";

// Xử lý khi form được submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $hk1 = isset($_POST['hk1']) ? floatval($_POST['hk1']) : 0;
    $hk2 = isset($_POST['hk2']) ? floatval($_POST['hk2']) : 0;

    // Tính điểm trung bình
    $dtb = ($hk1 + $hk2 * 2) / 3;

    // Xét kết quả
    if ($dtb >= 5) {
        $ketqua = "Được lên lớp";
    } else {
        $ketqua = "Ở lại lớp";
    }

    // Xếp loại học lực
    if ($dtb >= 8.5) {
        $xeploai = "Giỏi";
    } elseif ($dtb >= 6.5) {
        $xeploai = "Khá";
    } elseif ($dtb >= 5) {
        $xeploai = "Trung bình";
    } else {
        $xeploai = "Yếu";
    }
}
?>

<div class="container">
    <h2>Kết Quả Học Tập</h2>
    <form action="ket_qua_hoc_tap.php" method="post">
        <label for="hk1">Điểm HK1:</label>
        <input type="text" name="hk1" id="hk1" value="<?php echo ($hk1); ?>" required>

        <label for="hk2">Điểm HK2:</label>
        <input type="text" name="hk2" id="hk2" value="<?php echo ($hk2); ?>" required>

        <label for="dtb">Điểm trung bình:</label>
        <input type="text" name="dtb" id="dtb" value="<?php echo ($dtb); ?>" readonly>

        <label for="ketqua">Kết quả:</label>
        <input type="text" name="ketqua" id="ketqua" value="<?php echo ($ketqua); ?>" readonly>

        <label for="xeploai">Xếp loại học lực:</label>
        <input type="text" name="xeploai" id="xeploai" value="<?php echo ($xeploai); ?>" readonly>

        <input type="submit" value="Xem kết quả">
    </form>
</div>

</body>
</html>