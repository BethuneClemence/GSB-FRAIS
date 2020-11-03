<?php


namespace App\Entity;

class Visiteur{

    /**
     * @var string|null
     */
    private $id;
    /**
     * @var string|null
     */
    private $nom;
    /**
     * @var string|null
     */
    private $prenom;
    /**
     * @var string|null
     */
    private $login;
    /**
     * @var string|null
     */
    private $mdp;
    /**
     * @var string|null
     */
    private $adresse;
    /**
     * @var string|null
     */
    private $cp;
    /**
     * @var string|null
     */
    private $ville;
    /**
     * @var string|null
     */
    private $dateEmbauche;
    
    public function __construct($id, $nom, $prenom, $login, $mdp, $adresse, $cp, $ville, $dateEmbauche){

        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->mdp = $mdp;
        $this->adresse = $adresse ;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->dateEmbauche = $dateEmbauche;

    }

    // Getters 
    public function getId(){

        return $this->id;

    }

    public function getNom(){

        return $this->nom;
        
    }

    public function getPrenom(){

        return $this->prenom;
        
    }

    public function getLogin(){

        return $this->login;
        
    }

    public function getMdp(){

        return $this->mdp;
        
    }

    public function getAdresse(){

        return $this->adresse;
        
    }

    public function getCp(){

        return $this->cp;
        
    }

    public function getVille(){

        return $this->ville;
        
    }

    public function getDateEmbauche(){

        return $this->dateEmbauche;
        
    }


    // Setters 
    public function setId($id){

        return $this->id = $id;

    }

    public function setNom($nom){

        return $this->nom = $nom;
        
    }

    public function setPrenom($prenom){

        return $this->prenom = $prenom;
        
    }

    public function setLogin($login){

        return $this->login = $login;
        
    }

    public function setMdp($mdp){

        return $this->mdp = $mdp;
        
    }

    public function setAdresse($adresse){

        return $this->adresse = $adresse;
        
    }

    public function setCp($cp){

        return $this->cp = $cp;
        
    }

    public function setVille($ville){

        return $this->ville = $ville;
        
    }

    public function setDateEmbauche($dateEmbauche){

        return $this->dateEmbauche = $dateEmbauche;
        
    }


}