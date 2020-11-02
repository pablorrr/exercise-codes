<?php

/**
 *
 */

class Students {
    
    //  Implementacja zmiennych środowiskowych
    
    public $albumNumber;
    public $studentName;
    public $peselNumber;
    
    //  Implementacja metod

    public function getStudentName() {
        return $this->studentName;
    }

    public function getStudentPesel() {
        return $this->peselNumber;
    }

    public function getStudentAlbum() {
        return $this->albumNumber;
    }
    
}

?>