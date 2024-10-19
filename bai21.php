<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sochiahet</title>
    <style>
        body{
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1{
            background-color: fuchsia;
            
        }
       .main{
            background-color: pink;
            border-radius: 20px;
            padding: 20px;
            border-color: #333;
            width: 300px;
            border: 2px solid #ccc;

        }
       
            input[type="number"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
        }
        input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
        }
        input[type="text"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 16px;
            width: 300px;
            color: red;
           background-color: pink;
    </style>
</head>
<body>
<div class="main">
    <h1>Số chia hết cho A và B</h1>
    <form  method="post">
            <label class ="lable" for="n">Nhập N:</label>
            <input type="number" name="n" required><br>
            <label class ="lable" for="a">Nhập A:</label>
            <input type="number" name="a" required><br>
            <label class ="lable" for="b">Nhập B:</label>
            <input type="number" name="b" required><br>
            <input class = "btn" type="submit" name="submit" value="Các số <=N chia hết cho A và cho B">
        </form>
    

    <?php
    if (isset($_POST['submit'])) {
        $n = $_POST['n'];
        $a = $_POST['a'];
        $b = $_POST['b'];

        function kt_so($so, $a, $b) {
            return ($so % $a == 0 && $so % $b == 0) ? 1 : 0;
        }

        $chuoi = "";
        for ($i = 1; $i <= $n; $i++) {
            if (kt_so($i, $a, $b) == 1) {
                $chuoi .= $i . ", ";
            }
        }

        // Xóa dấu phẩy và khoảng trắng cuối cùng nếu có
        $chuoi = rtrim($chuoi, ', ');

        echo "<h2>Số chia hết cho $a và $b từ 1 đến $n:</h2>";
        echo "<input type='text' value='$chuoi' readonly>";
    }
    ?>
    </div>
</body>
</html>