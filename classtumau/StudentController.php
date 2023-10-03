<?php 
include './Student.php';
// class StrudentController{
    // private $listOfStudents;

    // public function __construct()
    // {
    //     $std01 = new Student('2151163731', 'Đỗ Thị Thương','HTTT');
    //     $std02 = new Student('2151163729', 'Nguyễn Thị Thơm','HTTT');
    //     $std03 = new Student('2151163731', 'Đỗ Thị Thanh','HTTT');

    //     $this->listOfStudents[] = $std01; // thêm vào mảng
    //     array_push($this->listOfStudents, $std02,$std03);
    // }
    // public function addNewStudent($Student){
    //     array_push($this->listOfStudents, $Student);
    // }

    // public function getAllStudent(){
    //     return $this->listOfStudents;
    // }
   

    
    /*ndex.php routing chi co the xem ma khong co quyen gi - nguoi chi duong
    nguoi lap trinh = nguoi viet kich ban
    gia su moi URL co khuan dang 
    c - controller a - action (ham can goi trong controller)
    truong hop db: default: c=HomeController a=index() > HomeController -> index()
    method = GET - key=value

    if(isset($_GET['c']){
        $controller = $_GET['c'];
    })else {
        $controller = 'home';
    }*/
?>
    <?php 
    $controller = isset($_GET['c'])?$_GET['c']:'home'; 
    $action = isset($_GET['a'])?$_GET['a']:'index';// toan tu 3 ngoi
    echo $controller.'--'.$action;

    $controller = ucfirst($controller); //chuyen ky tu dau sang in hoa: home -> Home
    $controller = $controller."Controller"; //Home>HomeController

    $path = "controllers/".$controller.".php"; //HomeController. > controller/HomeController.php
    echo $path;
    if(!file_exists($path)){
        die("Request not found. PLS check your path again!!");
    }

    include "$path";
    $myController = new $controller();
    if(method_exists($myController, $action)){
        $myController->$action();
    }else {
        echo "$action does not exist in $controller class";
    }
   

    #include "controllers/HomeController.php";
    
?>

