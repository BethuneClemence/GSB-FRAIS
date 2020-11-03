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
            ->add('annee', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->add('repas', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->add('nuitee', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->add('km', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->add('nbJustificatif', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->add('montantTotal', TextType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->add('envoyer', SubmitType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->add('annuler', ResetType::class, array('label'=>'', 'attr'=> array('class'=>'form-control')))
            ->getForm();
        

            $request = Request::createFromGlobals();
            $formSaisirFrais->handleRequest($request);

            if($formSaisirFrais->isSubmitted() && $formSaisirFrais->isValid()){
                return new Response($this->page->render('visiteur/menu/saisir/saisirFicheFrais.html.twig', array('formulaireSaisirFrais' => $formSaisirFrais->createView())));
            }
            return new Response($this->page->render('visiteur/menu/saisir/saisirFicheFrais.html.twig', array('formulaireSaisirFrais' => $formSaisirFrais->createView())));

            
        }
    }
