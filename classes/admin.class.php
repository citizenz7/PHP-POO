<?php
class Admin extends Film {
    ///On tente d'afficher $film_titre qui n'existe pas dans Admin
    public function getId2(){
        return $this->film_id;
    }

    public function getId(){
        return $this->film_id;
    }

    public function getTitre2(){
        return $this->film_titre;
    }

    /*On surcharge la méthode getTitre() de Film. Ici, on conserve
     *le même code dans la méthode mais c'est cette méthode qui sera
     *utilisée par $pierre*/
    public function getTitre(){
        return $this->film_titre;
    }

    public function getRealisateur2(){
        return $this->film_realisateur;
    }

    public function getRealisateur(){
        return $this->film_realisateur;
    }

    public function getAnnee2(){
        return $this->film_annee;
    }

    public function getAnnee(){
        return $this->film_annee;
    }
}
?>
