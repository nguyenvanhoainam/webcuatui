<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USCLN và BSCNN</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: pink;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #d35400;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #5d6d7e;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #d35400;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e67e22;
        }

        p {
            font-size: 18px;
            color: #2e4053;
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ước Số Chung Lớn Nhất và Bội Số Chung Nhỏ Nhất</h2>
        <form action="uscln_bscnn.php" method="post">
            <label for="soA">Số A:</label>
            <input type="text" id="soA" name="a" value="<?php echo isset($_POST['a']) ? $_POST['a'] : ''; ?>">

            <label for="soB">Số B:</label>
            <input type="text" id="soB" name="b" value="<?php echo isset($_POST['b']) ? $_POST['b'] : ''; ?>">

            <button type="submit" name="submit">Tìm USCLN và BSCNN</button>
        </form>

        <?php
        function tim_uscln($a, $b) {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }

        if (isset($_POST['submit'])) {
            $a = intval($_POST['a']);
            $b = intval($_POST['b']);

            if ($a > 0 && $b > 0) {
                $uscln = tim_uscln($a, $b);
                $bscnn = ($a * $b) / $uscln;
                echo "<p>USCLN: $uscln</p>";
                echo "<p>BSCNN: $bscnn</p>";
            } else {
                echo "<p class='error'>Vui lòng nhập số hợp lệ.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
