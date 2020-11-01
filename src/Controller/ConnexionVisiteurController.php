<?php


    namespace App\Controller;
    use App\Modele\Modele;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\PasswordType;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Twig\Environment;
    use Symfony\Component\HttpFoundation\Session\Session;
    

    class ConnexionVisiteurController extends Controller// la ligne ''extends absract controller'' est enlevé car il est impossible d'implementer de nouvelles methodes
                                // etant donner que c'est une classe abstraite
    {
        /**
         * @var Environment  // pour cela on rajoute ces lignes la afin de dire ''j'ai le droit d'implementer de nouvelles fonctions !!
         */
        private $page;
        public function __construct(Environment $page){

            $this->page = $page;

        } // a toujours avoir dans chaque controlleur

        public function index(Request $request){
            
            $formulaireConnexion = $this->createFormBuilder(array('allow_extra_fields' =>true))
            ->add('login', TextType::class, array('label' => 'Login', 'attr' => array('class' =>'form-control', 'placeholder'=> 'Exemple : andre')))
            ->add('mdp', PasswordType::class, array('label' => 'Mot de passe','attr' => array('class' => 'form-control', 'placeholder' => 'Exemple : *******')))
            ->add('valider', SubmitType::class, array('label' => 'Se connecter','attr' => array('class' => 'btn btn-primary btn-block')))
            ->getForm();

            $request = Request::createFromGlobals();
            $formulaireConnexion->handleRequest($request);

            if($formulaireConnexion->isSubmitted() && $formulaireConnexion->isValid()){
                // l'utilisateur a clique sur le bouton se connecter et a rempli tout les champs ! 
                
                $donneesFormulaire = $formulaireConnexion->getData();

                $modele = new Modele();
                $unVisiteur = $modele->seConnecterVisiteur($donneesFormulaire['login'], $donneesFormulaire['mdp']); // permet d'appeler la fonction seConnecterVisiteur() par le biai de notre objet $modele 
                if(!empty($unVisiteur)){


                    // On init la session de l'user authentifié...
                    $session = new Session();
                    // On crée les variables dont on aura besoin qui seront active durant la session...
                    $session->set('id', $unVisiteur[0]['id']);
                    $session->set('nom', $unVisiteur[0]['nom']);
                    $session->set('prenom', $unVisiteur[0]['prenom']);
                    $session->set('login', $unVisiteur[0]['login']);
                    $session->set('adresse', $unVisiteur[0]['adresse']);
                    $session->set('ville', $unVisiteur[0]['ville']);
                    $session->set('dateEmbauche', $unVisiteur[0]['dateEmbauche']);

                    return new Response($this->page->render('visiteur/menu/menu.html.twig', array('login'=> $donneesFormulaire['login'])));

                }else return new Response($this->page->render('visiteur/connexionVisiteur.html.twig', array('formulaireConnexion' => $formulaireConnexion->createView(), 'echecConnexion' => true)));
            }
            
            return new Response($this->page->render('visiteur/connexionVisiteur.html.twig', array('formulaireConnexion' => $formulaireConnexion->createView())));
        }
    }
