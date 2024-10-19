<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc nhất</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f3db;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffeaa7;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        h2 {
            background-color: #d35400;
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            margin: -20px -20px 20px -20px;
        }

        label {
            display: inline-block;
            width: 100px;
            text-align: right;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 50px;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #e67e22;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #d35400;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>GIẢI PHƯƠNG TRÌNH BẬC NHẤT</h2>
        <form method="post" action="">
            <label for="a">Phương trình:</label>
            <input type="text" id="a" name="a" placeholder="a" required> x +
            <input type="text" id="b" name="b" placeholder="b" required> = 0<br>

            <input type="submit" name="submit" value="Giải phương trình">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];

            if (is_numeric($a) && is_numeric($b)) {
                if ($a == 0) {
                    if ($b == 0) {
                        echo "<div class='result' style='color: green;'>Phương trình có vô số nghiệm.</div>";
                    } else {
                        echo "<div class='result' style='color: red;'>Phương trình vô nghiệm.</div>";
                    }
                } else {
                    $x = -$b / $a;
                    echo "<div class='result' style='color: blue;'>Nghiệm của phương trình: x = " . $x . "</div>";
                }
            } else {
                echo "<div class='result' style='color: red;'>Vui lòng nhập giá trị số hợp lệ.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
