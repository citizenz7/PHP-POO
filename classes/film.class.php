<?php

  // Le mot clef public signifie ici qu’on va pouvoir accéder à nos propriétés depuis l’intérieur et l’extérieur de notre classe
  //

    class Film {

        private $film_id;
        private $film_titre;
        private $film_realisateur;
        private $film_annee;

        public function __construct($i, $t, $r, $a) {
          $this->film_id = $i;
          $this->film_titre = $t;
          $this->film_realisateur = $r;
          $this->film_annee = $a;
        }

        public function getId(){
            return $this->film_id;
        }

        public function getTitre() {
            return $this->film_titre;
        }

        // public function setTitre($new_titre){
        //     $this->titre = $new_titre;
        // }
        //
        public function getRealisateur(){
            return $this->film_realisateur;
        }
        //
        // public function setRealisateur($new_realisateur){
        //     $this->annee = $new_realisateur;
        // }

        public function getAnnee(){
            return $this->film_annee;
        }

        // public function setAnnee($new_annee){
        //     $this->annee = $new_annee;
        // }

    }
?>
