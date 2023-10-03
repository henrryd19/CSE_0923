<?php 
    class Student{
        private string $stdID; // uu tiên chọn kiểu string vì đỡ tốn bộ nhớ và có thể chứa tí tự
        private string $stdName;
        private string $stdMajor;
        private string $stdSchool = "TLU";
        //  khai báo chặt chẽ thì nên để kiểu dữ liệu
        // tên class nên trùng với tên file lưu
        // chữ cái đầu class nên viết hoa
        public function __construct(string $id,string  $name , string $major){ // hàm tạo : là hàm tự động đc gọi khi tạo đối tượng, khi gọi tới đối tượng 'new'
            // khi gọi tớ đối tượng neww thì tự động gọi đến contruct
            $this->stdID = $id;
            $this->stdName = $name;
            $this->stdMajor = $major;

        }
        
        public function getStdID():string{ 
            return $this->stdID;
        }

        public function  setID(string $id):void{
            $this->stdID =$id;
        }

        public function getStdName():string{ 
            return $this->stdName;
        }

        public function  setName(string $name):void{
            $this->stdName =$name;
        }

        public function getStdMajor():string{ 
            return $this->stdMajor;
        }

        public function  setMajor(string $major):void{
            $this->stdMajor =$major;
        }

        public function getStdSchool():string{ 
            return $this->stdSchool;
        }

        public function  setSchool(string $shool):void{
            $this->stdID =$shool;
        }
            
    } // private là k thể truy câp ngoài phạm vi lớp
   $std01 = new Student('2151160499','henrryd','HTTT') ;
?>