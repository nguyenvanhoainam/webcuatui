<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả thi đại học</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9e6e6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            background-color: #e53935;
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            margin: -20px -20px 20px -20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #e53935;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #d32f2f;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Kết quả thi đại học</h2>
        <form method="post" action="">
            <label for="toan">Toán:</label>
            <input type="text" id="toan" name="toan" placeholder="Nhập điểm Toán">

            <label for="ly">Lý:</label>
            <input type="text" id="ly" name="ly" placeholder="Nhập điểm Lý">

            <label for="hoa">Hóa:</label>
            <input type="text" id="hoa" name="hoa" placeholder="Nhập điểm Hóa">

            <label for="diemchuan">Điểm chuẩn:</label>
            <input type="text" id="diemchuan" name="diemchuan" placeholder="Nhập điểm chuẩn">

            <input type="submit" name="submit" value="Xem kết quả">
        </form>
        

        <?php
        if (isset($_POST['submit'])) {
            $toan = $_POST['toan'];
            $ly = $_POST['ly'];
            $hoa = $_POST['hoa'];
            $diemchuan = $_POST['diemchuan'];

            if (is_numeric($toan) && is_numeric($ly) && is_numeric($hoa) && is_numeric($diemchuan)) {
                // Tính tổng điểm
                $tongdiem = $toan + $ly + $hoa;
                echo "<div class='result'>Tổng điểm: " . $tongdiem . "</div>";

                // Kiểm tra đậu hay rớt
                if ($tongdiem >= $diemchuan) {
                    echo "<div class='result' style='color: green;'>Kết quả: Đậu</div>";
                } else {
                    echo "<div class='result' style='color: red;'>Kết quả: Rớt</div>";
                }
            } else {
                echo "<div class='result' style='color: red;'>Vui lòng nhập chính xác các điểm!</div>";
            }
        }
        ?>
    </div>
</body>
</html>
