<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Cạnh Huyền Tam Giác Vuông</title>
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
    <h2>CẠNH HUYỀN TAM GIÁC VUÔNG</h2>
    <form method="post" action="">
        <label for="canha">Cạnh A:</label>
        <input type="text" name="canha" id="canha" value="<?php echo isset($_POST['canha']) ? $_POST['canha'] : ''; ?>" required>

        <label for="canhb">Cạnh B:</label>
        <input type="text" name="canhb" id="canhb" value="<?php echo isset($_POST['canhb']) ? $_POST['canhb'] : ''; ?>" required>

        <label for="canhhuyen">Cạnh huyền:</label>
        <input type="text" name="canhhuyen" id="canhhuyen" value="<?php echo isset($canhhuyen) ? $canhhuyen : ''; ?>" readonly>

        <input type="submit" name="tinh" value="Tính">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị từ form
        $canha = $_POST['canha'];
        $canhb = $_POST['canhb'];

        // Kiểm tra giá trị nhập vào có phải là số hợp lệ không
        if (is_numeric($canha) && is_numeric($canhb)) {
            // Tính cạnh huyền theo công thức Pythagore: sqrt(A^2 + B^2)
            $canhhuyen = sqrt(pow($canha, 2) + pow($canhb, 2));

            // Hiển thị kết quả trong ô "Cạnh huyền"
            echo "<script>
                    document.getElementById('canhhuyen').value = $canhhuyen;
                  </script>";
        } else {
            echo "<p style='color:red;'>Vui lòng nhập số hợp lệ cho cạnh A và cạnh B.</p>";
        }
    }
    ?>
</div>

</body>
</html>
