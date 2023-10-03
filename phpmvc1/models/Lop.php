<?php
class Lop{
    //Properties
    private $id;
    private $classname;
    

    public function __construct($id, $classname)
    {
        $this->id = $id;
        $this->classname = $classname;
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
    public function getClassName()
    {
        return $this->classname;
    }

    /**
     * @param mixed $classname
     */
    public function setClassname($classname)
    {
        $this->classname = $classname;
    }

   

}
