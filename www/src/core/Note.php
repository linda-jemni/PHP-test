<?php

declare(strict_types=1);

namespace Ecole\core;

use Ecole\core\NoteException;

class Note
{
    
    private $note_eleve;
    
    
    public function __construct(int $note)
    {
        if($note < 0 || $note > 20)
            throw new NoteException('Erreur ! la note doit etre entre 0 et 20. Mercii!! ', 1);
        
        $this->note_eleve = $note;


    }

    public static function generateRandomNote(): int {
        return rand(0,20);
    }

    public function setNote($noteToSet): void {
        
        if($noteToSet < 0 || $noteToSet > 20)
            throw new NoteException('Erreur ! la note doit etre entre 0 et 20. Mercii!! ', 1);

        $this->note_eleve = $noteToSet;

        return;
    }

    public function getNote(): int {
        return $this->note_eleve;
    }

    

    public function __toString(){
        return strval($this->note_eleve);
    }


}