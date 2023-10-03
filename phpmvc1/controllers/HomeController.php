<?php
class HomeController{
    public function index(){
        //Có làm việc với Service/Model ko?
        include ".BTTH_3/cse/phpmvc1/services/StudentService.php";
        $stdService = new StudentService();
        $student = $stdService->getAllStudents();
        //Hiển thị ra view nào
        // include "views/home/index.php";
        include ".BTTH_3/cse/phpmvc1/views/home/index.php";
    }

    // public function detail(){
    //     $data = "Detail from ....";
    //     include "views/home/detail.php";
    // }
}