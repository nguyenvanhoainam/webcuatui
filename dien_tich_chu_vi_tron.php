<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Diện Tích và Chu Vi Hình Tròn</title>
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
    <h2>DIỆN TÍCH và CHU VI HÌNH TRÒN</h2>
    <form method="post" action="">
        <label for="bankinh">Bán kính:</label>
        <input type="text" name="bankinh" id="bankinh" value="<?php echo isset($_POST['bankinh']) ? $_POST['bankinh'] : ''; ?>" required>

        <label for="dientich">Diện tích:</label>
        <input type="text" name="dientich" id="dientich" value="<?php echo isset($dientich) ? $dientich : ''; ?>" readonly>

        <label for="chuvi">Chu vi:</label>
        <input type="text" name="chuvi" id="chuvi" value="<?php echo isset($chuvi) ? $chuvi : ''; ?>" readonly>

        <input type="submit" name="tinh" value="Tính">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị bán kính từ form
        $bankinh = $_POST['bankinh'];

        // Hằng số PI
        $PI = 3.14;

        // Kiểm tra giá trị nhập vào có phải là số hợp lệ không
        if (is_numeric($bankinh)) {
            // Tính diện tích hình tròn: PI * r^2
            $dientich = $PI * pow($bankinh, 2);

            // Tính chu vi hình tròn: 2 * PI * r
            $chuvi = 2 * $PI * $bankinh;

            // Hiển thị kết quả trong các ô input
            echo "<script>
                    document.getElementById('dientich').value = $dientich;
                    document.getElementById('chuvi').value = $chuvi;
                  </script>";
        } else {
            echo "<p style='color:red;'>Vui lòng nhập số hợp lệ cho bán kính.</p>";
        }
    }
    ?>
</div>

</body>
</html>
