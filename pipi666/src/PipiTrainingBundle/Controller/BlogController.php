<?php
/**
 * Created by PhpStorm.
 * User: maciej666
 * Date: 03.03.16
 * Time: 17:28
 */

namespace PipiTrainingBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller; // klasa która pozwala na dziedziczenie mojej klasie kontrolera z klasy symfonowskiego kontrolera
use Symfony\Component\HttpFoundation\Response; //pozwala na odpowiedz za pomocą obiektu response
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route; //do mapowania kontrolera za pomocą adnotacji
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template; //pozwala na generowanie szablonu za pomocą adnotacji
use Symfony\Component\HttpFoundation\Request; // pozwala na automatyczne wstrzyknięcie obiektu request do kontrolera
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method; // aby w adnotacji móc umieścić parametr method
use PipiTrainingBundle\Helper\Journal\Journal;
use PipiTrainingBundle\Helper\Journal\Entry;
use PipiTrainingBundle\Helper\DataProvider;
use Symfony\Component\Validator\Constraints\DateTime;
use PipiTrainingBundle\Form\Type\RegisterType;
use PipiTrainingBundle\Entity\Register;

/**
 * @Route("/blog")
 */

class BlogController extends Controller
{
    /**
     * @Route("/contact",
     * name="kontakt"
     * )
     *
     * @Template
     */
    public function contactAction(){
        return array();
    }


    /**
     * @Route("/",
     * name="glowna"
     * )
     *
     * @Template
     */
    public function indexAction(){
        return array();
    }


    /**
     * @Route("/journal",
     *  name="dziennik"
     * )
     *
     * @Template
     */
    public function journalAction(){
//        return array(
//            'history' => Journal1::getHistoryAsArray()
//        );
//        return new Response(array(
//            'history' => Journal::getHistoryAsArray()
//        ));
//            return array('history'=>array());

        return array(
            'history' => Journal1::getHistoryAsObjects()
        );
    }


//    /**
//     * @Route("/about",
//     * name="o_mnie"
//     * )
//     *
//     * @Template
//     */
//    public function aboutAction(){
//        return array();
//    }
//    Tą strone można wyswietlić jako strone statyczną gdyż nie ma w niej żadnej logiki
//        PATRZ PLIK ROUTING.YML, nie potrzeba kontrolera


    public function followingWidgetAction(){
//        return array (
//            'list' => DataProvider1::getFollowings()
//        );
        return $this->render('PipiTrainingBundle:Blog/Widget:followingWidget.html.twig', array (
            'list' => DataProvider1::getFollowings()
        ));
    }


    public function walletWidgetAction(){

        return $this->render('PipiTrainingBundle:Blog/Widget:walletWidget.html.twig', array (
            'list' => DataProvider1::getWallet()
        ));
    }


    /**
     * @Route (
     * "/comments",
     * name="komentarze"
     * )
     * @Template
     */
    public function commentsAction(){
        return array (
          'comment'=> DataProvider1::getGuestBook()
        );
    }


    /**
     * @Route(
     * "/register",
     * name="rejestracja"
     * )
     * @Template
     */
    public function registerAction(Request $Request){ //odc. 65 - 67
        //Typy pól znajde w Form Types References odc.58
        //wstrzykiwanie wartości defaultowych
//        $preData = array(
//            'country' => 'PL' // podejrzyj kod na formularzu i tam masz skróty
//        );

        $Register = new Register();
        $Register->setName('Boban Kamienczuk');
        $Register->setCountry('PL');

        $Session = $this->get('session');  // otwarcie sesji aby przekazać info o poprawnej rejestracji
        if(!$Session ->has('registered')) {

            $form = $this->createForm(new RegisterType(), $Register);

            $form->handleRequest($Request);


            if ($Request->isMethod('POST')) {  //aby sprawdzić czy formularz został przesłany, aby przy wejściu na strone rejestracji nie pojawiał się komunikat o niewypełnionym formularzu
                if ($form->isValid()) {

                    $savePath = $this->get('kernel')->getRootDir() . '/../web/uploads/'; //odc. 64, 14 min.
                    $Register->save($savePath);

                    //zapisywanie do bazy danych
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($Register);
                    $em->flush(); // wyślij pytanie zapytujące do bazy danych :\

                    $msgBody = $this->render('PipiTrainingBundle:Email:base.html.twig', array(
                        'name' => $Register->getName()
                    ));

                    $message = \Swift_Message::newInstance()
                        ->setSubject('Potwierdzenie rejestracji')
                        ->setFrom(array('boban.kamienczuk@gmail.com' => 'Pipi_inwestor'))
                        ->setTo(array($Register->getEmail() => $Register->getName()))
                        ->setBody($msgBody, 'text/html');

                    $this->get('mailer')->send($message);

//                    $Session->getFlashBag()->add('success', 'Twoje zgłoszenie zostało zapisane.');   //obiekt flashback przechowuje informacje tylko do następnego przekierowania   typ wiadomości to success bo CSS w bootstrapie koloruje elementy na zielono
                   //zamiast lini wyżej bośmy zrobili swój serwis
                    $this->get('pipi_notification')->addSuccess('Twoje zgłoszenie zostało zapisane');

                        $Session->set('registered', true); //aby sprawdzić czy użytkownik jest już zarejestrowany

                    return $this->redirect($this->generateUrl('rejestracja'));
                } else {
//                    $Session->getFlashBag()->add('danger', 'Popraw błędy formularza'); // wyświetlam Session w base.html.twig
                      $this->get('pipi_notification')->addError('Popraw błędy formularza');
                }
            }
        }
        return array(
            'form' => isset($form) ? $form->createView() : NULL,    //metoda createView zwraca instancję klasy FormView
        );
    }




}

class Journal1 {

    static function getHistoryAsArray(){
        return array(
            array(
                'company_name' => 'atrem',
                'start_date' => new \DateTime('2012-03-03 00:00:00'),
                'purchase_price' => 7.53,
                'quantity' => 1000,
                'end_date' => new \DateTime('2012-05-05 00:00:00'),
                'selling_price' => 9.12
            ),
            array(
                'company_name' => 'debica',
                'start_date' => new \DateTime('2013-01-13 00:00:00'),
                'purchase_price' => 96.22,
                'quantity' => 100,
                'end_date' => NULL,
                'selling_price' => NULL
            ),
            array(
                'company_name' => 'alchemia',
                'start_date' => new \DateTime('2012-03-13 00:00:00'),
                'purchase_price' => 4.21,
                'quantity' => 1550,
                'end_date' => new \DateTime('2012-10-05 00:00:00'),
                'selling_price' => 7.12
            ),
            array(
                'company_name' => 'votum',
                'start_date' => new \DateTime('2013-06-03 00:00:00'),
                'purchase_price' => 7.53,
                'quantity' => 1110,
                'end_date' => NULL,
                'selling_price' => NULL
            ),
            array(
                'company_name' => 'krec',
                'start_date' => new \DateTime('2013-09-13 00:00:00'),
                'purchase_price' => 7.53,
                'quantity' => 1000,
                'end_date' => new \DateTime('2013-12-12 00:00:00'),
                'selling_price' => 6.32
            ),
            array(
                'company_name' => 'alma',
                'start_date' => new \DateTime('2012-12-12 00:00:00'),
                'purchase_price' => 7.53,
                'quantity' => 1000,
                'end_date' => NULL,
                'selling_price' => NULL
            )
        );
    }

    static function getHistoryAsObjects(){
        $objArr = array();
        foreach(static::getHistoryAsArray() as $row){
            $objArr[] = new Entry1($row);
        }

        return $objArr;
    }


}

class Entry1 {
    private $company_name;
    private $start_date;
    private $purchase_price;
    private $quantity;
    private $end_date;
    private $selling_price;

    private $result;

    function __construct(array $row) {
        foreach($row as $key=>$val){
            $this->$key = $val;
        }
    }

    public function getCompanyName() {
        return $this->company_name;
    }

    public function getStartDate() {
        return $this->start_date;
    }

    public function getPurchasePrice() {
        return $this->purchase_price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getEndDate() {
        return $this->end_date;
    }

    public function getSellingPrice() {
        return $this->selling_price;
    }

    public function isFinished(){
        return (NULL !== $this->end_date);
    }

    public function getResult(){
        if(!$this->isFinished()){
            return NULL;
        }

        if(!isset($this->result)){
            $this->result = ($this->selling_price*$this->quantity) - ($this->purchase_price*$this->quantity);
        }

        return $this->result;
    }

    public function isClosedPositive(){
        if(!$this->isFinished()){
            return FALSE;
        }

        return ($this->getResult() > 0);
    }

    public function isClosedNegative(){
        if(!$this->isFinished()){
            return FALSE;
        }

        return ($this->getResult() <= 0);
    }
}



class DataProvider1 {

    public static function getFollowings(){
        return array(
            'ASSECO POLAND',
            'GRUPA AZOTY',
            'CCC',
            'GRUPA LOTOS',
            'NETIA',
            'TAURON POLSKA ENERGIA',
            'POLSKI KONCERN NAFTOWY ORLEN'
        );
    }

    public static function getWallet(){
        return array(
            'ABC DATA - 4,30 zł',
            'KOMPUTRONIK - 8,56 zł',
            'AVIA SOLUTIONS GROUP AB - 35,21 zł',
            'ORZEŁ BIAŁY - 12,15 zł',
            'AMREST HOLDINGS SE - 90,35 zł',
            'WESTA ISIC S.A. - 0,60 zł',
            'ENERGA - 17,10 zł',
            'POLSKI KONCERN NAFTOWY ORLEN - 54,12 zł'
        );
    }


    public static function getGuestBook(){
        return array(
            array(
                'name' => '<strong>Wojtek</strong> Hossa',
                'comment' => 'Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim.'
            ),
            array(
                'name' => '<strong>Marek</strong> Bessa',
                'comment' => 'Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, <strong>luctus et interdum adipiscing wisi</strong>. Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, vestibulum id'
            ),
            array(
                'name' => '<strong>Irek</strong> Złośliwiec',
                'comment' => 'Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa <script>alert("Strona zainfekowana!");</script> ac <style>body{background-color:red!important;}</style></p></section></div></article></div></body></html>turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit'
            ),
        );
    }
}