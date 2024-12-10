<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim kiem</title>
</head>
<body>
    <form action="../Controller/C_Student.php" method="post" name="search">
        <h3>Tìm Kiếm Thông Sinh Viên</h3>
        <input type="radio" name="giatri" value="ID">
        <label for="ID">ID</label>
        <input type="radio" name="giatri" value="Name">
        <label for="Name">Name</label>
        <input type="radio" name="giatri" value="Age">
        <label for="Age">Age</label>
        <input type="radio" name="giatri" value="University">
        <label for="University">University</label>
        <br>
        <br>
        <label for="thongtin">Nhập vào thông tin: </label>
        <input type="text" name="thongtin">
        <br>
        <div class="container">
            <input id="button" type="submit" value="Search" name="search">
            <input id="button" type="reset" value="Reset">
        </div>
    </form>
</body>
<style>
    form {
        margin: auto;
        width: 20%; 
        padding: 20px 20px 20px 20px;
        border: 1px solid #100f0f; 
        border-radius: 5%;
    }
    .container {
        margin: 10px;
        display: flex;
        justify-content: space-between;
    }
</style>
</html>