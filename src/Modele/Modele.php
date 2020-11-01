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

    public function consulterFicheFrais($identifiant, $date){
        $connexion = $this->connexionBDD();

        if($connexion == TRUE){

            $requete = $connexion->prepare('SELECT * FROM FicheFrais WHERE idVisiteur = :id AND mois = :date', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

            $requete->execute(array("id"=>$identifiant, "date"=>$date));

            $resultat = $requete->fetchAll();
            return $resultat;


        }else return FALSE;

    }

    public function consulterFicheFraisForfait($identifiant, $date){
        $connexion = $this->connexionBDD();

        if($connexion == TRUE){

            // $requete = $connexion->prepare('SELECT * FROM LigneFraisForfait WHERE idVisiteur = :id AND mois = :date', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $requete = $connexion->prepare('SELECT * FROM FicheFrais as ff INNER JOIN LigneFraisForfait as lff ON lff.idVisiteur = ff.idVisiteur INNER JOIN Etat as E ON E.id = ff.idEtat INNER JOIN LigneFraisHorsForfait as lfhf ON lfhf.idVisiteur = ff.idVisiteur WHERE ff.idVisiteur = :id AND ff.mois = :date', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $requete->execute(array("id"=>$identifiant, "date"=>$date));
            

            $resultat = $requete->fetchAll();
            return $resultat;


        }else return FALSE;

    }

    public function consulterFicheFraisHorsForfait($identifiant, $date){
        $connexion = $this->connexionBDD();

        if($connexion == TRUE){

            $requete = $connexion->prepare('SELECT * FROM LigneFraisHorsForfait WHERE idVisiteur = :id AND mois = :date', array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

            $requete->execute(array("id"=>$identifiant, "date"=>$date));

            $resultat = $requete->fetchAll();
            return $resultat;


        }else return FALSE;

    }
    

}