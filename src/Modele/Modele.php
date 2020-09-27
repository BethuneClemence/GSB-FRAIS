<?php


namespace App\Modele;
use \PDO;

class Modele{

    private $DRIVER = 'mysql:host=localhost;dbname=gsbFrais';
    private $USER = 'developpeur';
    private $MDP = 'azerty';

    private $OPTIONS = array (
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    );

    public function connexionBDD(){

        try{

            return new \PDO($this->DRIVER, $this->USER, $this->MDP, $this->OPTIONS);

        }catch(PDOException $Exception ){

            return FALSE;
        }
        
    }

    public function seConnecterVisiteur($identifiant, $mdp){
        $connexion = $this->connexionBDD();

        if($connexion == TRUE){

            $requete = $connexion->prepare('SELECT * FROM Visiteur WHERE login = :id AND mdp = :mdp', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

            $requete->execute(array("id"=>$identifiant, "mdp"=>$mdp));

            $resultat = $requete->fetchAll();
            return $resultat;


        }else return FALSE;

    }
    

}