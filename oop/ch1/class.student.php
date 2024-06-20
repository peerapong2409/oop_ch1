<?php
class Student
{
    const ID = 6540259104;
    public $school = "LUR";
    public function info()
    {
        $data = self::ID . " : " .$this->school;
        return $data;
    }
}
?>