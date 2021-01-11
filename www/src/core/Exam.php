<?php

declare(strict_types=1);

namespace Ecole\core;

use Ecole\models\Teacher;
use Ecole\models\Student;
use Ecole\core\NoteException;

class Exam implements Evaluate,Classement
{
    
    private $teacher;
    private $students;
    Private $session;
    private $classement;
    public function __construct(Teacher $teacher, Student &...$students){
        $this->teacher = $teacher;        
        $this->students = $students;
        $this->session = array_fill_keys($this->students,null);
        $this->classement = array();


    }

    
    // attribuer note 
    public function noterExam(): void
    {
        try {
            foreach($this->students as $student){
                $this->session[((string) $student)] = new Note(Note::generateRandomNote());
                //echo (string) $student . $this->session[((string) $student)];

            }


        } catch (NoteException $e) {
            echo 'Exception=> FCT:noterExam() TYPE: NoteException  ',  $e->getMessage(), "\n";

            $this->session = array_fill_keys($this->students,null);
            
        } 
        
    }

    //classement 

    public function classer(): void {
        $results = array();
        
        foreach($this->students as $student){
            
            $this->classement[(string) $student] = $student->getfName()."-- note attribuee: ". (string) $this->session[(string) $student] ;
            
        }
        usort($this->classement, function($a, $b) {
            $splitter = explode("-- note attribuee: ",$a);
            $splitter1 = explode("-- note attribuee: ",$b);
            return $splitter[1] <= $splitter1[1];
        });
    }

    //affichage classement 

    public function printResultatSession() : void {
        foreach($this->classement as $key=>$value)
            echo nl2br ("\n".$key." => ".$value."\n");

          
}

}