<?php
include_once("E_Student.php");
class Model_Student {
    public function __construct() {}
    
    public function getAllStudent() {
        $link = mysqli_connect("localhost", "root", "anhtuan1311") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "student");
        $sql = "select * from student";
        $rs = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            $id = $row['ID']; $name = $row['Name'];
            $age = $row['Age']; $university = $row['University'];
            $students[$id] = new Entity_Student($id, $name, $age, $university);
        }
        return $students;
    }
    
    public function getStudentDetail($stid) {
        // Load du lieu tu CSDL
        $allStudent = $this->getAllStudent();
        return $allStudent[$stid];
    }

    public function getID()
    {
        $link = mysqli_connect("localhost", "root", "anhtuan1311") or die("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link, "student");
        $sql = "select ID from student";
        $rs = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            $id = $row['ID']; 
            $listID[$id] = $id;
        }
        return $listID;

    }

    public function Insert($id, $name, $age, $uni)
    {
        $link = mysqli_connect("localhost", "root", "anhtuan1311") or die ("khong the ket noi co so du lieu");
        mysqli_select_db($link, "student");
        $sql = "INSERT INTO student (ID, `Name`, Age, University) VALUES ($id, '$name', $age, '$uni')";
        $rs = mysqli_query($link, $sql);
        if(!$rs)
            return FALSE;
        else 
            return TRUE;
    }

    public function update($id, $name, $age, $uni)
    {   
        $link = mysqli_connect("localhost", "root", "anhtuan1311") or die ("khong the ket noi co so du lieu");
        mysqli_select_db($link, "student");
        $sql = "UPDATE student Set `Name` = '$name', Age = '$age', University = '$uni'  Where ID = '$id'";
        $rs = mysqli_query($link, $sql);
        if(!$rs)
            return FALSE;
        else 
            return TRUE;
        
    }

    public function Delete($id)
    {
        $link = mysqli_connect("localhost", "root", "anhtuan1311") or die ("khong the ket noi co so du lieu");
        mysqli_select_db($link, "student");
        $sql = "DELETE FROM student WHERE ID = '$id'";
        $rs = mysqli_query($link, $sql);
        if(!$rs)
            return FALSE;
        else 
            return TRUE;
    }

    public function Search($giatri, $thongtin)
    {
        $link = mysqli_connect("localhost", "root", "anhtuan1311") or die ("khong the ket noi co so du lieu");
        mysqli_select_db($link, "student");

        if($giatri == "ID") {
            $id = (int)$thongtin;
            $sql = "SELECT * from student where ID = $id";
        }
        if($giatri == "Name") {
            $sql = "SELECT * from student where `Name` LIKE '%$thongtin%'";
        }
        if($giatri == "Age") {
            $sql = "SELECT * from student where Age = '$thongtin'";
        }
        if($giatri == "University") {
            $sql = "SELECT * from student where University LIKE '%$thongtin%'";
        }
        

        $rs = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($rs)) {
            $id = $row['ID']; $name = $row['Name'];
            $age = $row['Age']; $university = $row['University'];
            $students[$id] = new Entity_Student($id, $name, $age, $university);
        }
        return $students;

    }
}
?>
