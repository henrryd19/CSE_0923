<?php
class BaiHat{
    //Properties
    private $id;
    private $tenBaiHat;
    private $caSi;
    private $idTheLoai;
    
    //Methods

  
    public function __construct($id, $tenBaiHat, $caSi, $idTheLoai)
    {
        $this->id = $id;
        $this->tenBaiHat = $tenBaiHat;
        $this->caSi = $caSi;
        $this->idTheLoai = $idTheLoai;
       
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function gettenBaiHat()
    {
        return $this->tenBaiHat;
    }

    /**
     * @param mixed $tenBaiHat
     */
    public function settenBaiHat($tenBaiHat)
    {
        $this->tenBaiHat = $tenBaiHat;
    }

    /**
     * @return mixed
     */
    public function getcaSi()
    {
        return $this->caSi;
    }

    /**
     * @param mixed $caSi
     */
    public function setcaSi($caSi)
    {
        $this->caSi = $caSi;
    }

    /**
     * @return mixed
     */
    public function getidTheLoai()
    {
        return $this->idTheLoai;
    }

    /**
     * @param mixed $idTheLoai
     */
    public function setidTheLoai($idTheLoai)
    {
        $this->tenBaiHat = $idTheLoai;
    }

    



}
