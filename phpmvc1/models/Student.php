<?php
class Student{
    //Properties
    private $id;
    private $nameofstudent;
    private $email;
    private $dateOfBorned;
    private $idLop;


    public function __construct($id, $nameofstudent, $email, $dateOfBorned, $idLop)
    {
        $this->id = $id;
        $this->nameofstudent = $nameofstudent;
        $this->email = $email;
        $this->dateOfBorned = $dateOfBorned;
        $this->idLop = $idLop;
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
    public function getNameOfStudent()
    {
        return $this->nameofstudent;
    }

    /**
     * @param mixed $NameOfStudent
     */
    public function setNameOfStudent($nameofstudent)
    {
        $this->nameofstudent = $nameofstudent;
    }
    /**
     * @param mixed $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDateOfBorned()
    {
        return $this->dateOfBorned;
    }
    
    /**
     * @param mixed $dateOfBorned
     */
    public function setDateOfBorned($dateOfBorned)
    {
        $this->dateOfBorned = $dateOfBorned;
    }

    /**
     * @return mixed
     */
    public function getIdLop()
    {
        return $this->idLop;
    }

    /**
     * @param mixed $idLop
     */
    public function setIdLop($idLop)
    {
        $this->id = $idLop;
    }
    // /**
    //  * @return string
    //  */
    // public function getSchool()
    // {
    //     return $this->school;
    // }

    // /**
    //  * @param string $school
    //  */
    // public function setSchool($school)
    // {
    //     $this->school = $school;
    // }


}
