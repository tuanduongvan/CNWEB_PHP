<html>
<head>
    <meta charset="UTF-8"/>
    <title>Cap nhat sinh vien</title>
</head>
<body>
    <h2>Chon Sinh Vien Cap Nhat</h2>
    <?php
        for($i = 1; $i <= sizeof($studentList); $i++) {
            echo "<p>" .$i. ". <a href='?id=" .$studentList[$i]->id ."'>" .$studentList[$i]->name ."</a></p>";
        }
    ?>
    <br>
    <p><a href="../indext.php">Home page</a></p>
</body>
</html>
