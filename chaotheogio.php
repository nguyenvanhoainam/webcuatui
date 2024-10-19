<!DOCTYPE html>
<html>
<head>
    <title>Chào theo giờ</title>
</head>
<body>
    <form method="post" action="">
        <label for="hour">Nhập giờ:</label>
        <input type="text" id="hour" name="hour">
        <input type="submit" name="submit" value="Chào">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $hour = $_POST['hour'];

        if (is_numeric($hour) && $hour >= 0 && $hour <= 23) {
            if ($hour >= 0 && $hour < 12) {
                echo "Chào buổi sáng!";
            } elseif ($hour >= 12 && $hour < 18) {
                echo "Chào buổi chiều!";
            } else {
                echo "Chào buổi tối!";
            }
        } else {
            echo "Vui lòng nhập một giá trị hợp lệ (0-23).";
        }
    }
    ?>
</body>
</html>
