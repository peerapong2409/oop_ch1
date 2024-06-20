<?php
class product
{
    private $id; //attrittritbute
    private $name; //attrittritbute

    public function getId()
    {
         // grtter method
         return $this->id;
    }
    public function setId($id)
    { //setter method
        $this->id = $id;
    }
    public function getName()
    { // getter method
        return $this->name;
    }
    public function setname($name)
    { //setter method
        $this->name = $name;
    }
    public function info()
    {
        {
            $info ="";
            foreach (func_get_args() as $arg) {
                switch ($arg) {
                    case 'id';
                    $info .= $this->id;
                    break;
                    case 'name';
                    $info .= $this->name;
                    break;
                }
            }
        }
        echo $info;
    }

    
}
?>