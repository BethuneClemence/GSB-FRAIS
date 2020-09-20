<?php


    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Twig\Environment; // a rajouter dans chaque controlleur

    class AccueilController  // la ligne ''extends'' est enlevé car il est impossible d'implementer de nouvelles methodes
                                // etant donner que c'est une classe abstraite
    {
        /**
         * @var Environment  // pour cela on rajoute ces lignes la afin de dire ''j'ai le droit d'implementer de nouvelles fonctions !!
         */
        private $page;
        public function __construct(Environment $page){

            $this->page = $page;

        }                     // a toujours avoir dans chaque controlleur
        public function index()
        {
            return new Response($this->page->render('accueil/accueil.html.twig'));
        }
    }