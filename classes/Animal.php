<?php
    class Animal {

      protected $position;
      protected $nom;

      public function deplacer(){
        $this->position++;
      }

      public function setNom($value){
        $this->nom = $value;
      }
      public function getNom(){
        return $this->nom;
      }

      public function getPosition() {
        return $this->position;
      }

      public function setPosition($position) {
        $this->position = $position;
      }

    }
?>
