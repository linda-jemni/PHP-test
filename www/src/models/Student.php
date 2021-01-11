<?php
declare(strict_types=1);


namespace Ecole\models;


use Ecole\models\User;


final class Student extends User
{
    private $id ;


    public function __construct(string $id,string $fName, string $lName)
    {
        parent::__construct($fName,$lName);
        $this->id = $id;


    }

    public function __toString()
    {
        return $this->id;
    }

    public function getIde() : String
    {
        return $this->id;
    }

    public function setIde(string $id)
    {
        $this->id = $id ;
    }

    
}