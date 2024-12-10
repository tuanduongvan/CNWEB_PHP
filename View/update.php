<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="../Controller/C_Student.php" method="post" name="update">
            <h3>Cập nhật Sinh viên</h3>
                <label for="ID">IDSV </label>
                <input type="text" name="ID" value ="<?php echo $student->id?>" readonly><br>
                <label for="Name">Họ Tên  </label>
                <input type="text" name="Name" value="<?php echo $student->name ?>"><br>
                <label for="Age">Tuổi </label>
                <input type="text" name="Age" value="<?php echo $student->age?>"><br>
                <label for="Uni">Tuổi </label>
                <input type="text" name="University" value="<?php echo $student->university?>"><br>
            <div class="container">
                <input id="button" type="submit" value="Update" name="update">
            </div>
    </form>
    <p><a href="../indext.php">Home page</a></p>
</body>
<style>
    /* Đặt form ở giữa màn hình */
    form {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Style cho tiêu đề */
    form h3 {
        text-align: center;
        margin-bottom: 15px;
        font-family: Arial, sans-serif;
        color: #333;
    }

    /* Style cho các nhãn */
    form label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
        color: #555;
    }

    /* Style cho các ô nhập */
    form input[type="text"],
    form select {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        font-size: 14px;
    }

    /* Style cho các nút */
    form .container {
        display: flex;
        justify-content: space-between;
    }

    form #button {
        padding: 8px 15px;
        font-size: 14px;
        cursor: pointer;
        border: none;
        border-radius: 3px;
        color: #fff;
    }

    form #button[type="submit"] {
        background-color: #4CAF50; /* Màu xanh cho nút Insert */
    }

    form #button[type="reset"] {
        background-color: #f44336; /* Màu đỏ cho nút Reset */
    }

    /* Thêm hiệu ứng hover cho nút */
    form #button:hover {
        opacity: 0.9;
    }

</style>
</html>