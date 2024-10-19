<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Diện Tích Hình Chữ Nhật</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #f39c12;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #fff;
            font-family: 'Arial', sans-serif;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #fff;
        }
        input[type="text"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
        }
        input[type="text"]:readonly {
            background-color: #eee;
        }
        input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #27ae60;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #2ecc71;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>DIỆN TÍCH HÌNH CHỮ NHẬT</h2>
    <form method="post" action="">
        <label for="chieudai">Chiều dài:</label>
        <input type="text" name="chieudai" id="chieudai" value="<?php echo isset($_POST['chieudai']) ? $_POST['chieudai'] : ''; ?>" required>

        <label for="chieurong">Chiều rộng:</label>
        <input type="text" name="chieurong" id="chieurong" value="<?php echo isset($_POST['chieurong']) ? $_POST['chieurong'] : ''; ?>" required>

        <label for="dientich">Diện tích:</label>
        <input type="text" name="dientich" id="dientich" value="<?php echo isset($dientich) ? $dientich : ''; ?>" readonly>

        <input type="submit" name="tinh" value="Tính">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị từ form
        $chieudai = $_POST['chieudai'];
        $chieurong = $_POST['chieurong'];

        // Kiểm tra giá trị nhập vào có phải là số hợp lệ hay không
        if (is_numeric($chieudai) && is_numeric($chieurong)) {
            $dientich = $chieudai * $chieurong;
            echo "<script>document.getElementById('dientich').value = $dientich;</script>";
        } else {
            echo "<p style='color:red;'>Vui lòng nhập số hợp lệ cho chiều dài và chiều rộng.</p>";
        }
    }
    ?>
</div>

</body>
</html>
