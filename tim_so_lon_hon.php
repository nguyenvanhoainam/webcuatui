<!DOCTYPE html>
<html>
<head>
    <title>Tìm số lớn hơn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff8dc;
        }
        h2 {
            text-align: center;
            color: #d2691e;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            background-color: #f9e6e6;
            padding: 8px;
            border-radius: 5px;
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>TÌM SỐ LỚN HƠN</h2>
    <form method="post" action="">
        <label for="soA">Số A:</label>
        <input type="text" name="soA" value="<?php if(isset($_POST['soA'])) echo $_POST['soA']; ?>" required>

        <label for="soB">Số B:</label>
        <input type="text" name="soB" value="<?php if(isset($_POST['soB'])) echo $_POST['soB']; ?>" required>

        <label for="result">Số lớn hơn:</label>
        <input type="text" name="result" class="result" value="<?php if(isset($result)) echo $result; ?>" readonly>

        <input type="submit" name="submit" value="Tìm">
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra nếu có dữ liệu POST
    $soA = $_POST['soA'];
    $soB = $_POST['soB'];

    // Kiểm tra và tìm số lớn hơn
    if (is_numeric($soA) && is_numeric($soB)) {
        // So sánh hai số
        if ($soA > $soB) {
            $result = $soA;
        } else {
            $result = $soB;
        }
    } else {
        // Trường hợp người dùng nhập không phải là số
        $result = "Vui lòng nhập số hợp lệ!";
    }
}
?>

</body>
</html>

