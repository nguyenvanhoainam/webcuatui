<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc hai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
h1{
    text-align: center;
    background-color: #d9534f;
}
        .container {
            background-color: pink;
    border-radius: 8px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 350px;
    text-align: center;
        }

        h1 {
            font-size: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
           
            font-size: 14px;
        }

        input[type="number"] {
            width: 350px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
   
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        

        .result {
            margin-top: 20px;
            font-size: 16px;
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Giải Phương Trình Bậc Hai </h1>
        <h1>ax^2 +bx+c=0</h1>
        <form method="POST" action="">
        <label for="a">Hệ số a:</label>
        <input type="number" id="a" name="a"  required>
            <label for="b">Hệ số b:</label>
            <input type="number" id="b" name="b"  required>
            <label for="c">Hệ số c:</label>
            <input type="number" id="c" name="c"  required>
            <input type="submit" name="giai" value="Giải phương trình">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            function giai_pt_bac_nhat($b, $c) {
                if ($b == 0 && $c == 0) {
                    return "Phương trình vô số nghiệm";
                } elseif ($b == 0 && $c != 0) {
                    return "Phương trình vô nghiệm";
                } else {
                    return "Phương trình có nghiệm x = " . (-$c / $b);
                }
            }

            function giai_pt_bac_hai($a, $b, $c) {
                if ($a == 0) {
                    return giai_pt_bac_nhat($b, $c);
                }
                
                $delta = $b * $b - 4 * $a * $c;

                if ($delta < 0) {
                    return "Phương trình vô nghiệm";
                } elseif ($delta == 0) {
                    $x = -$b / (2 * $a);
                    return "Phương trình có nghiệm kép x1 = x2 = " . $x;
                } else {
                    $x1 = (-$b + sqrt($delta)) / (2 * $a);
                    $x2 = (-$b - sqrt($delta)) / (2 * $a);
                    return "Phương trình có 2 nghiệm phân biệt: x1 = " . $x1 . ", x2 = " . $x2;
                }
            }

            $ketqua = giai_pt_bac_hai($a, $b, $c);
            echo "<div class='result'><strong>Kết quả:</strong> $ketqua</div>";
        }
        ?>
    </div>
</body>
</html>
