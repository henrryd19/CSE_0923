<?php
include ".BTTH_3/cse/phpmvc1/models/Student.php";
class StudentService{
    //Mang la CSDL
    private $listOfStudents;

    public function __construct(){
        //Khoi tao mang voi 1 danh sach SV minh hoa tao san
        $std01 = new Student("1",'Do Huu Thinh','thinhcon1912@gmail.com', '19/12/2003','1');
        $std02 = new Student("2",'Nguyen Thi Thom','nguyenthithom@gmail.com','17/01/2003','2');
        $std03 = new Student("3",'Le Dinh Tu','ledinhtu@gmail.com', '09/07/2003','2');
        $this->listOfStudents[] = $std01; //cách 1: thêm phần tử vào mảng
        array_push($this->listOfStudents, $std02, $std03); //cách 2: thêm phần tử vào mảng
    }

    public function getAllStudents(){
        return $this->listOfStudents;
    }
}