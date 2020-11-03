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

    class ModifierMotDePasseController extends Controller // la ligne ''extends'' est enlevé car il est impossible d'implementer de nouvelles methodes
                                // etant donner que c'est une classe abstraite
    {
        /**
         * @var Environment  // pour cela on rajoute ces lanneela afin de dire ''j'ai le droit d'implementer de nouvelles fonctions !!
         */
        private $page;
        public function __construct(Environment $page){

            $this->page = $page;

        }                     // a toujours avoir dans chaque controlleur
        public function index(Request $request)
        {
        
            $formModifierMdp = $this->createFormBuilder(array('allow_extra_fields' =>true))
        
            ->add('ancien', PasswordType::class, array('label' => 'Ancien mot de passse','attr' => array('class' => 'form-control')))
            ->add('nvxMdp', PasswordType::class, array('label' => 'Nouveau mot de passse','attr' => array('class' => 'form-control')))
            ->add('confirmNvxMdp', PasswordType::class, array('label' => 'Confirmer mot de passse','attr' => array('class' => 'form-control')))
            ->add('valide', SubmitType::class, array('label' => 'Valider','attr' => array('class' => 'btn btn-primary btn-block')))
            ->getForm();

            $request = Request::createFromGlobals();
            $formModifierMdp->handleRequest($request);

            $donneesFormulaire = $formModifierMdp->getData();
            
            if($formModifierMdp->isSubmitted() && $formModifierMdp->isValid()){
                $ancienMdp = $this->get('session')->get('mdp');
                if($ancienMdp == $donneesFormulaire['ancien']){
                    if($donneesFormulaire['nvxMdp'] == $donneesFormulaire['confirmNvxMdp']){
                        $modele = new Modele();
                        $identifiant = $this->get('session')->get('id');
                        $succes = $modele->modifierMotDePasse($identifiant, $donneesFormulaire['nvxMdp']);
                        return new Response($this->page->render('visiteur/menu/modifierMotDePasse.html.twig', array('formulaireModifierMotDePasse' => $formModifierMdp->createView())));

                    }else{
                        return new Response($this->page->render('visiteur/menu/modifierMotDePasse.html.twig', array('motDePasseNonIdentique'=>true,'formulaireModifierMotDePasse' => $formModifierMdp->createView())));
                    }
                    
                }else return new Response($this->page->render('visiteur/menu/modifierMotDePasse.html.twig', array('ancienMdpFaux'=>true, 'formulaireModifierMotDePasse' => $formModifierMdp->createView())));
                

        
            }else{
                return new Response($this->page->render('visiteur/menu/modifierMotDePasse.html.twig', array('formulaireModifierMotDePasse' => $formModifierMdp->createView())));

            }
        }
       
    }