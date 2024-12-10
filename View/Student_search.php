<html>
<head>
    <meta charset="UTF-8"/>
    <title>Thong tin chi tiet sinh vien</title>
</head>
<body>
    <?php
        echo '<table border="1" width="100%">';
        echo '<caption><h2>Chi Tiết Sinh Viên</h2></caption>';
        echo '<tr><th>IDNV</th><th>Họ tên</th><th>Tuổi</th><th>Trường học</th></tr>';
        foreach ($studentList as $student) {
            echo '<tr><td>' . $student->id . '</td><td>' . $student->name . '</td><td>' . $student->age . '</td><td>' . $student->university . '</td></tr>';
        }
        echo '</table>';
    ?>
    <p><a href="javascript:history.back()">Back</a></p>
</body>
</html>
