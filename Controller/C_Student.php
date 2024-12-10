<?php
    include_once("../Model/M_Student.php");
    class Ctrl_Student {
        public function invoke() {
            if(isset($_GET['stid'])) {
                $modelStudent = new Model_Student();
                $student = $modelStudent->getStudentDetail($_GET['stid']);
                include_once("../View/StudentDetail.html");
            }
            if (isset($_GET['sv'])) {
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/StudentList.html");
            }

            if(isset($_GET['modl1']))
            {
                $modelStudent = new Model_Student();
                $listID = $modelStudent->getID();
                include_once("../View/AddStudent.php");
            }
            if(isset($_POST['insert']))
            {
                $id = (int)$_POST['ID'];
                $name = $_POST['name'];
                $age = $_POST['age'];
                $uni = $_POST['university'];
                $modelStudent = new Model_Student();
                $valid = $modelStudent->Insert($id, $name, $age, $uni);
                if ($valid)
                {   
                    $studentList = $modelStudent->getAllStudent();
                    include_once('../View/StudentList.html');
                }
            }

            if(isset($_GET['modl2']))
            {
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/Update_list.php");
            }

            if(isset($_GET['id']))
            {
                $modelStudent = new Model_Student();
                $student = $modelStudent->getStudentDetail($_GET['id']);
                include_once("../View/update.php");
            }

            if(isset($_POST['update']))
            {
                $id = (int)$_POST['ID'];
                $name = $_POST['Name'];
                $age = $_POST['Age'];
                $uni = $_POST['University'];
                $modelStudent = new Model_Student();
                $valid = $modelStudent->update($id, $name, $age, $uni);
                if ($valid)
                {   
                    $modelStudent = new Model_Student();
                    $student = $modelStudent->getStudentDetail($id);
                    include_once("../View/StudentDetail.html");
                }
                else {
                    echo "Cập nhật sinh viên thất bại!";
                }
            }
            if(isset($_GET['modl3']))
            {
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/Delete_list.php");
            }

            if(isset($_GET['id_dl']))
            {
                $modelStudent = new Model_Student();
                $valid = $modelStudent->Delete($_GET['id_dl']);
                if ($valid)
                {   
                    $modelStudent = new Model_Student();
                    $studentList = $modelStudent->getAllStudent();
                    include_once("../View/StudentList.html");
                }
                else {
                    echo "Cập nhật sinh viên thất bại!";
                }
            }

            if(isset($_GET['modl4']))
            {
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/Search.php");
            }

            if(isset($_POST['search']))
            {
                $giatri = $_POST["giatri"];
                $thongtin = $_POST["thongtin"];
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->Search($giatri, $thongtin);
                include_once("../View/Student_search.php");
            }
        }
    }

    $C_Student = new Ctrl_Student();
    $C_Student->invoke();
?>