<?php

namespace PipiTrainingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert; //przestrzeń nazw pozwalająca na korzystanie z validatorów, zaś assert pozwala na korzystanie z wszystkich
use Symfony\Component\OptionsResolver\OptionsResolver;
class RegisterType extends AbstractType {

        public function getName(){
            return 'register_form';
        }

        public function buildForm(FormBuilderInterface $builder, array $options){
            $builder
                ->add('name', 'text', array(
                    'label' => 'Imię i Nazwisko',
                ))
                ->add('email','email', array(
                    'label' => 'Email'
                ))
                ->add('sex', 'choice', array(
                    'label' => 'Płeć',
                    'choices' => array(
                        'm' => 'Mężczyzna',
                        'f' => 'Kobieta'
                    ),
                    'expanded' => true
                ))
                ->add('birthdate', 'birthday', array(
                    'label' => 'Data urodzenia',
                    'empty_value' => '--',    // domyślna wartość
                    'empty_data' => NULL
                ))
                ->add('country', 'country', array(
                    'label' => 'Kraj',
                    'empty_value' => '--',
                    'empty_data' => NULL
                ))
                ->add('course', 'choice', array(
                    'label' => 'Wybierz kurs',
                    'choices' => array(
                        'at' => 'analiza techniczna',
                        'af' => 'analiza fundamentalna',
                        'basic' => 'kurs podstawowy',
                        'master' => 'kurs zaawansowany'
                    ),
                    'empty_value' => '--',
                    'empty_data' => NULL
                ))
                ->add('invest', 'choice', array(
                    'label' => 'Inwestycje',
                    'choices' => array(
                        'f' => 'Forex',
                        'a' => 'Akcje',
                        'o' => 'Obligacje',
                        'etf' => 'ETF'
                    ),
                    'expanded' => true,
                    'multiple' => true,
                ))
                ->add('comments', 'textarea', array(
                    'label' => 'Dodatkowy komentarz'
                ))
                ->add('paymentFile', 'file', array(
                    'label' => 'Potwierdzenie zapłaty'
                ))
                ->add('rules', 'checkbox', array(
                    'label' => 'Potwierdź',
                    'mapped' => false //nie potrzebujemy tej informacji więc, trza tak o zrobić
                ))
                ->add('save', 'submit', array(
                    'label' => 'Zapisz'
                ));
        }
    //Definiowanie domyslnej encji dla formularza zapewnia to że jedynie ten formularz działa z tą encją (pamiętaj aby dodać use)
    public function configureOptions(OptionsResolver $resolver){
        $resolver->setDefaults(array(
            'data_class' => 'PipiTrainingBundle\Entity\Register'
        ));
    }
}