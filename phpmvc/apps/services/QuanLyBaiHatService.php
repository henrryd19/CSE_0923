<?php
require_once APP_ROOT . 'phpmvc/apps/models/BaiHat.php';

class QuanLyBaiHatService {
    // private $theLoaiArray;
    // public function __construct()
    // {   $tl1 = new TheLoai("1",'Pop');
    //     $tl2 = new TheLoai("2",'K-Pop');
    //     $tl3 = new TheLoai("3",'k-Pop');
    //     array_push($this->theLoaiArray, $tl1, $tl2, $tl3);
        
    // // }() {
    // //     $tl1 = new TheLoai("1",'Pop');
    // //     $tl2 = new TheLoai("2",'K-Pop');
    // //     $tl3 = new TheLoai("3",'k-Pop');
    // //     array_push($this->theLoaiArray, $tl1, $tl2, $tl3);
    // }
    private $baiHatArray;
    public function __construct()
    {   
        $this->baiHatArray = array();
        $bh1 = new BaiHat("1",'Flower', 'Jisoo','1');
        $bh2 = new BaiHat("2",'Pink Venom', 'BLACKPINK','2');
        $bh3 = new BaiHat("3",'Solo', 'Jennie','2');
        $this->baiHatArray[] = $bh1; //cách 1: thêm phần tử vào mảng
        array_push($this->baiHatArray, $bh2, $bh3);
        
    }
    public function getAllBaiHat() {
        return $this->baiHatArray;
    }
   /*  private $listOfStudents;

    public function __construct(){
        //Khoi tao mang voi 1 danh sach SV minh hoa tao san
        $std01 = new Student("205106111",'Nguyen Van A', '24/5/2000');
        $std02 = new Student("205106112",'Nguyen Van B', '24/5/2000');
        $std03 = new Student("205106113",'Nguyen Van B', '24/5/2000');
        $this->listOfStudents[] = $std01; //cách 1: thêm phần tử vào mảng
        array_push($this->listOfStudents, $std02, $std03); //cách 2: thêm phần tử vào mảng
    }

    public function getAllStudents(){
        return $this->listOfStudents;
    } */
    
    // public function deleteBaiHat($baiHatId) {
    //     foreach ($this->baiHatArray as $key => $baiHat) {
    //         if ($baiHat->id === $baiHatId) {
    //             unset($this->baiHatArray[$key]);
    //             break;
    //         }
    //     }
    // }
    
    // public function updateBaiHat($baiHat) {
    //     foreach ($this->baiHatArray as $key => $existingBaiHat) {
    //         if ($existingBaiHat->id === $baiHat->id) {
    //             $this->baiHatArray[$key] = $baiHat;
    //             break;
    //         }
    //     }
    // }
    
   
    
    // public function getAllTheLoai() {
    //     return $this->theLoaiArray;
    // }
}
?>