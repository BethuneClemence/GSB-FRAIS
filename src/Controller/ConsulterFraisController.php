<?php

    

    namespace App\Controller;
    use App\Modele\Modele;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Twig\Environment; // a rajouter dans chaque controlleur

    class ConsulterFraisController extends Controller // la ligne ''extends'' est enlevé car il est impossible d'implementer de nouvelles methodes
                                // etant donner que c'est une classe abstraite
    {
        /**
         * @var Environment  // pour cela on rajoute ces lanneela afin de dire ''j'ai le droit d'implementer de nouvelles fonctions !!
         */
        private $page;
        public function __construct(Environment $page){

            $this->page = $page;

        }                     // a toujours avoir dans chaque controlleur
        public function index()
        {
            $annee = array();
            for($i = 0; $i < 10; $i++){
                $y = date('Y') - $i;
                $annee[$y] = $y;
              
            }
            
            $formConsulterFicheFrais = $this->createFormBuilder(array('allow_extra_fields' =>true))
            ->add('mois', ChoiceType::class, array('label'=>'', 'attr'=> array('class'=>'form-control'),
                'choices' => array(
                    'janvier' => '01',
                    'fevrier' => '02',
                    'mars' => '03',
                    'avril' => '04',
                    'mai' => '05',
                    'juin' => '06',
                    'juillet' => '07',
                    'aout' => '08',
                    'septembre' => '09',
                    'octobre' => '10',
                    'novembre' => '11',
                    'decembre' => '12',
                ))
            )
            ->add('annee', ChoiceType::class, array('label'=>'', 'attr'=> array('class'=>'form-control'),
                'choices' => $annee)
            )

            ->add('valider', SubmitType::class, array('label' => 'Valider','attr' => array('class' => 'btn btn-primary btn-block')))
            ->getForm();

            $request = Request::createFromGlobals();
            $formConsulterFicheFrais->handleRequest($request);

            if($formConsulterFicheFrais->isSubmitted()&& $formConsulterFicheFrais->isValid()){
                $donneesFormulaire = $formConsulterFicheFrais->getData();

                $modele = new Modele();
                $identifiant = 'a17';
                $date = sprintf('%02d%04d' , $donneesFormulaire['mois'] , $donneesFormulaire['annee']);
                $uneFicheFrais = $modele->consulterFicheFraisForfait($identifiant,$date); // permet d'appeler la fonction seConnecterVisiteur() par le biai de notre objet $modele
                
                
                
                //var_dump($fiche);
                //var_dump($uneFicheFrais);
                //var_dump($uneFicheFraisForfait);
                //var_dump($uneFicheFraisHorsForfait);

                // $id = $this->get('session')->get('id'); Pour récuperer l'id du user authentifié

                if(!empty($uneFicheFrais)){
                    return new Response($this->page->render('visiteur/menu/consulter/afficher/afficherFicheFrais.html.twig', array('ficheFrais'=> $uneFicheFrais)));

                }else return new Response($this->page->render('visiteur/menu/consulter/consulterFrais.html.twig', array('formConsulterFicheFrais' => $formConsulterFicheFrais->createView(), 'donneesInvalides' => true)));
            

            }
            return new Response($this->page->render('visiteur/menu/consulter/consulterFrais.html.twig', array('formConsulterFicheFrais' => $formConsulterFicheFrais->createView())));
            
        }
    }
