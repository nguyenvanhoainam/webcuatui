<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Diện Tích Hình Chữ Nhật</title>
</head>
<body>

<h2>DIỆN TÍCH HÌNH CHỮ NHẬT</h2>

<form method="post" action="dien_tich_hcn.php">
    Chiều dài: <input type="text" name="chieudai" value="<?php echo isset($_POST['chieudai']) ? $_POST['chieudai'] : ''; ?>"><br>
    Chiều rộng: <input type="text" name="chieurong" value="<?php echo isset($_POST['chieurong']) ? $_POST['chieurong'] : ''; ?>"><br>
    Diện tích: <input type="text" name="dientich" value="<?php echo isset($dientich) ? $dientich : ''; ?>" readonly><br>
    <input type="submit" name="tinh" value="Tính">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị từ form
    $chieudai = $_POST['chieudai'];
    $chieurong = $_POST['chieurong'];

    // Tính diện tích
    if (is_numeric($chieudai) && is_numeric($chieurong)) {
        $dientich = $chieudai * $chieurong;
    } else {
        echo "Vui lòng nhập số hợp lệ cho chiều dài và chiều rộng.";
    }
}
?>

</body>
</html>
