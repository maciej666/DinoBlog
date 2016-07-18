<?php

namespace PipiTrainingBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;   //pobieranie klasy sesji z przestrzeni nazw

class NotificationService
{
    private $session;

    /**
     * NotificationService constructor.
     * @param $session
     */
    public function __construct(Session $session)   //tworzony z alt+INSERT
    {
        $this->session = $session;
    }

    protected function addMessage($type, $message){
        $this->session->getFlashBag()->add($type, $message);
    }

    public function addSuccess($message){
        $this->addMessage('success', $message);
    }

    public function addError($message){
        $this->addMessage('danger', $message);
    }
}