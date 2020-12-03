<?php

    

    namespace App\Controller;
    use App\Modele\Modele;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
    use Symfony\Component\Form\Extension\Core\Type\ResetType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Twig\Environment; // a rajouter dans chaque controlleur

    class SaisirFraisController extends Controller // la ligne ''extends'' est enlevé car il est impossible d'implementer de nouvelles methodes
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
            
            
            $formSaisirFrais = $this->createFormBuilder(array('allow_extra_fields' =>true))
            
            ->add('mois', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->add('forfaitEtape', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->add('fraisKm', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->add('nuiteeHotel', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->add('repasRestaurant', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            // ->add('date', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            // ->add('libelle', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            // ->add('montant', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
           
            ->add('envoyer', SubmitType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->add('annuler', ResetType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->getForm();
        

            $request = Request::createFromGlobals();
            $formSaisirFrais->handleRequest($request);

            $modele = new Modele();
            $identifiant = $this->get('session')->get('id');
            if(date('d') < 9){
                if(date('m') == 1){
                    $date = '12'.date('Y');
                }else{
                    $date = strval(date('m')- 1).date('Y');
                }
                
            }else{
                $date = date('mY');
            }
            $uneFicheFrais = $modele->consulterFicheFrais($identifiant,$date);
                    
            // inserer dans la table ligneFraisHorsForfait
            // updater ou inserer dans la table ligneFraisForfait  
            if($formSaisirFrais->isSubmitted() && $formSaisirFrais->isValid()){

                $data = $formSaisirFrais->getData();
                $mois = $date;
                $forfaitEtape = $data['forfaitEtape'];
                $fraisKm = $data['fraisKm'];
                $nuiteeHotel = $data['nuiteeHotel'];
                $repasRestaurant = $data['repasRestaurant'];

                $modele->addLigneFraisForfait($identifiant, $mois, $forfaitEtape, $fraisKm, $nuiteeHotel, $repasRestaurant);

                if(!empty($uneFicheFrais)){

                    return new Response($this->page->render('visiteur/menu/saisir/saisirFicheFrais.html.twig', array('ficheFrais'=> $uneFicheFrais, 'formulaireSaisirFrais' => $formSaisirFrais->createView())));

                }else return new Response($this->page->render('visiteur/menu/saisir/saisirFicheFrais.html.twig', array('ficheFrais'=> $uneFicheFrais, 'formulaireSaisirFrais' => $formSaisirFrais->createView())));
            
            

                
            }
            return new Response($this->page->render('visiteur/menu/saisir/saisirFicheFrais.html.twig', array('ficheFrais'=> $uneFicheFrais, 'formulaireSaisirFrais' => $formSaisirFrais->createView())));

            
        }
    }
