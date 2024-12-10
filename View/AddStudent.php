<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function check(array) {
            console.log(array); 
            var giatri = document.querySelector('input[name="ID"]').value.trim();
            console.log(giatri);
            var values = Object.values(array);
            if (values.includes(giatri)) {
                alert("ID sinh viên bị trùng");
                return;
            }
        }

        function valid()
        {
            var IDNV = document.querySelector('input[name="ID"]').value.trim();
            var Hoten = document.querySelector('input[name="name"]').value.trim();
            var Age = document.querySelector('input[name="age"]').value.trim();
            var Uni = document.querySelector('input[name="university"]').value.trim();
            if (IDNV === "" || Hoten === "" || Age === "" || Uni === "" ) {
                alert("Các trường không được để trống");  
                return false; 
            }
            return true;
        }
    </script>
    <style>
        /* General Form Styles */
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-family: Arial, sans-serif;
        }
    
        /* Header */
        form h3 {
            margin: 0;
            padding: 10px;
            background-color: #1a2238;
            color: #fff;
            border-radius: 8px 8px 0 0;
            font-size: 20px;
        }
    
        /* Input Fields */
        form label {
            font-weight: bold;
            display: block;
            text-align: left;
            margin-top: 10px;
        }
    
        form input[type="text"],
        form select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
    
        /* Error Message */
        .error-text {
            color: red;
            font-size: 12px;
            text-align: left;
            margin-top: -10px;
        }
    
        /* Button Container */
        .container {
            margin-top: 20px;
            text-align: center;
        }
    
        #button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            font-size: 16px;
            color: #fff;
            background-color: #1a2238;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    
        #button:hover {
            background-color: #3a4566;
        }
    
        /* Additional Style for Reset Button */
        input[type="reset"] {
            background-color: #ccc;
            color: #333;
        }
    
        input[type="reset"]:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>
    <form action="../controller/C_Student.php"  method="post" name="insert" onsubmit="return valid()">
        <h3>Add Students</h3>
        <label for="IDNV">ID: </label>
        <input type="text" name="ID" id="ID" onblur='check(<?php echo json_encode($listID); ?>)'><br>

        <label for="Hoten">Name: </label>
        <input type="text" name="name"><br>

        <label for="Age">Age: </label>
        <input type="text" name="age"><br>

        <label for="Uni">University: </label>
        <input type="text" name="university"><br>

        <div class="container">
            <input id="button" type="submit" name="insert" value="Insert">
            <input id="button" type="reset" value="Reset">
        </div>
    </form>
</body>
</html>