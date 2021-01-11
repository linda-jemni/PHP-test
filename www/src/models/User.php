<?php
declare(strict_types=1);

namespace Ecole\models;

abstract class User
{
    protected $fName;
    protected $lName;
    protected $mail;

    public function __construct(string $nom , string $prenom)
    {
        $this->fName = $nom;
        $this->lName = $prenom;
    }

    public function getFName() : string
    {
        return $this->fName;
    }

    public function getLName() : string
    {
        return $this->LName;
    }

    
    public function setFName(string $fName)
    {
        $this->fName = $fName;
    }

    public function setLName(string $lName)
    {
        $this->lName = $lName;
    }


}