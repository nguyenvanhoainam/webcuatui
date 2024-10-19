<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán Tiền Điện</title>
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
            width: 350px;
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
    <h2>THANH TOÁN TIỀN ĐIỆN</h2>
    <form method="post" action="">
        <label for="tenchuho">Tên chủ hộ:</label>
        <input type="text" name="tenchuho" id="tenchuho" value="<?php echo isset($_POST['tenchuho']) ? $_POST['tenchuho'] : ''; ?>" required>

        <label for="chisocu">Chỉ số cũ (Kw):</label>
        <input type="text" name="chisocu" id="chisocu" value="<?php echo isset($_POST['chisocu']) ? $_POST['chisocu'] : ''; ?>" required>

        <label for="chisomoi">Chỉ số mới (Kw):</label>
        <input type="text" name="chisomoi" id="chisomoi" value="<?php echo isset($_POST['chisomoi']) ? $_POST['chisomoi'] : ''; ?>" required>

        <label for="dongia">Đơn giá (VND):</label>
        <input type="text" name="dongia" id="dongia" value="2000" readonly>

        <label for="thanhtien">Số tiền thanh toán (VND):</label>
        <input type="text" name="thanhtien" id="thanhtien" value="<?php echo isset($thanhtien) ? $thanhtien : ''; ?>" readonly>

        <input type="submit" name="tinh" value="Tính">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị từ form
        $tenchuho = $_POST['tenchuho'];
        $chisocu = $_POST['chisocu'];
        $chisomoi = $_POST['chisomoi'];
        $dongia = 2000; // Đơn giá cố định

        // Kiểm tra các giá trị nhập vào có phải là số hợp lệ không
        if (is_numeric($chisocu) && is_numeric($chisomoi)) {
            // Tính số tiền thanh toán: (Chỉ số mới - Chỉ số cũ) * Đơn giá
            $thanhtien = ($chisomoi - $chisocu) * $dongia;
            
            // Hiển thị kết quả trong ô "Số tiền thanh toán"
            echo "<script>
                    document.getElementById('thanhtien').value = $thanhtien;
                  </script>";
        } else {
            echo "<p style='color:red;'>Vui lòng nhập số hợp lệ cho chỉ số cũ và chỉ số mới.</p>";
        }
    }
    ?>
</div>

</body>
</html>
