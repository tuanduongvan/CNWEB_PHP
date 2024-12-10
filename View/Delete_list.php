<html>
<head>
    <meta charset="UTF-8"/>
    <title>Xoa Sinh Vien</title>
</head>
<body>
    <h2>Chọn sinh viên để xóa</h2>
    <?php
        for($i = 1; $i <= sizeof($studentList); $i++) {
            echo "<p>" .$i. ". <a href='?id_dl=" .$studentList[$i]->id ."'>" .$studentList[$i]->name ."</a></p>";
        }
    ?>
    <br>
    <p><a href="../indext.php">Home page</a></p>
</body>
</html>
