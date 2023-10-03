<?php
require_once APP_ROOT . 'apps/sevices/QuanLyBaiHatService.php';
class HomeController1{
    public function index(){
        //Có làm việc với Service/Model ko?
        $bhService = new QuanLyBaiHatService();
        $baihat = $bhService->getAllBaiHat();
        // $tlService = new QuanLyBaiHatService();
        // $theloai = $tlService->getAllTheLoai();
        //Hiển thị ra view nào
        include APP_ROOT ."/phpmvc/apps/views/home/index1.php";
    }

    public function detail(){
        $data = "Detail from ....";
        include "views/home/detail.php";
    }
}