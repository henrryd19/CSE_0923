<?php
class TheLoai{
    //Properties
    private $id;
    private $tenTheLoai;
    
    //Methods

    /**
     * @param $id
     * @param $fullname
     * @param $dateOfBorned
     */
    public function __construct($id, $tenTheLoai)
    {
        $this->id = $id;
        $this->tenTheLoai = $tenTheLoai;
       
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
    public function gettenTheLoai()
    {
        return $this->tenTheLoai;
    }

    /**
     * @param mixed $tenTheloai
     */
    public function settenTheLoai($tenTheLoai)
    {
        $this->tenTheLoai = $tenTheLoai;
    }

    



}
