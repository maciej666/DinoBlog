<?php
/**
 * Created by PhpStorm.
 * User: maciej666
 * Date: 03.03.16
 * Time: 17:28
 */

namespace PipiTrainingBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller; // klasa która pozwala na dziedziczenie mojej klasie kontrolera z klasy symfonowskiego kontrolera
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; //do mapowania kontrolera za pomocą adnotacji
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template; //pozwala na generowanie szablonu za pomocą adnotacji
use Symfony\Component\HttpFoundation\Request; // pozwala na automatyczne wstrzyknięcie obiektu request do kontrolera
use PipiTrainingBundle\Form\Type\RegisterType;

/**
 * @Route("/blog/admin")
 */

class AdminController extends Controller
{

    /**
     * @Route(
     *         "/",
     *          name="admin_listing"
     * )
     *
     * @Template
     */
    public function listingAction(){

        $Repo = $this->getDoctrine()->getRepository('PipiTrainingBundle:Register'); // Repository pozwala na przeszukiwanie bazy danych
//        $rows = $Repo->findAll();
          $rows = $Repo->findBy(array(
              'country'=>'PL',
          ));

        //sprawdzanie uprawnień użytkownika aby móc w zależności od tego wyświetląć odpowiednie treści w twigu
        if($this->get('security.context')->isGranted('ROLE_ADMIN')){
            $btns = TRUE;
        }else{
            $btns = FALSE;
        } //w chuj łatwiej zrobić to z poziomu twiga

        //pobranie danych o użytkowniku
        $user = $this->getUser();
        return array(
            'user' => $user,
            'rows' => $rows,
            'btns' => $btns
        );
    }


    /**
     * @Route(
     *         "/details/{id}",
     *          name="admin_details"
     * )
     *
     * @Template
     */
    public function detailsAction($id){

        $Repo = $this->getDoctrine()->getRepository('PipiTrainingBundle:Register'); // Repository pozwala na przeszukiwanie bazy danych
        $Register = $Repo->find($id);

        if(NULL==$Register){
            throw $this->createNotFoundException('Nie znaleziono takiej rejestracji na szkolenie');
        }
        return array(
            'register' => $Register
        );
    }


    /**
     * @Route(
     *         "/update/{id}",
     *          name="admin_update"
     * )
     *
     * @Template
     */
    public function updateAction(Request $Request, $id){

        $Repo = $this->getDoctrine()->getRepository('PipiTrainingBundle:Register'); // Repository pozwala na przeszukiwanie bazy danych
        $Register = $Repo->find($id);

        if(NULL==$Register){
            throw $this->createNotFoundException('Nie znaleziono takiej rejestracji na szkolenie');
        }

        $form = $this->createForm(new RegisterType(), $Register);

        if($Request->isMethod('POST')){
            $Session = $this->get('session');
            $form->handleRequest($Request);

            if($form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($Register);
            $em->flush();
            $Session->getFlashBag()->add('success', 'Zaktualizowano rekord.');

            return $this->redirect($this->generateUrl('admin_details', array(
                'id' => $Register->getId()
            )));

            }else{
            $Session->getFlashBag()->add('danger', 'Popraw błędy formularza');
            }
        }

        return array(
            'register' => $Register,
            'form' => $form->createView()
        );
    }


    /**
     * @Route(
     *         "/delete/{id}",
     *          name="admin_delete"
     * )
     */
    public function deleteAction($id){

        $Repo = $this->getDoctrine()->getRepository('PipiTrainingBundle:Register'); // Repository pozwala na przeszukiwanie bazy danych
        $Register = $Repo->find($id);

        if(NULL==$Register){
            throw $this->createNotFoundException('Nie znaleziono takiej rejestracji na szkolenie');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($Register);
        $em->flush();

        $this->get('session')->getFlashBag()->add('success', 'Rekord został usunięty poprawnie');

        return $this->redirect($this->generateURL('admin_listing'));

    }

}