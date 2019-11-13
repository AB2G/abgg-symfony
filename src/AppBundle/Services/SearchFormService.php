<?php

namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SearchFormService
{
	public function __construct(\Doctrine\ORM\EntityManager $em)
	{
	  $this->em = $em;
	}
	
	public function createFormLol()
	{
    	$formArray = array(
        0 => array(
            'name' => 'manager', 
            'type' =>'choice',
            'array' => $array = array(
            	'label'    => 'Chercher Managers',
			    'choices'  => array('man' => 'Manager'),
			    'required' => false,
			    'expanded' => true,
			    'multiple' => true
			    )
            ),
        1 => array(
            'name' => 'main', 
            'type' =>'choice',
            'array' => $array =  array(
            	'label'    => 'Par Role',
			    'choices'  => array(
				    'top' => 'Top Lane',
				    'mid' => 'Middle Lane',
				    'bot' => 'Bottom Carry',
				    'sup' => 'Support ',
				    'jungle' => 'Jungle',
				    ),
			    'required' => false,
			    'expanded' => true,
			    'multiple' => true
            )),
        2 => array(
            'name' => 'pseudo', 
            'type' =>'text',
            'array' => $array = array(
            	'label'    => 'Chercher par pseudo',
			    'required' => false,
			    )
            ),
        3 => array(
            'name' => 'players', 
            'type' =>'choice',
            'array' => $array =  array(
            	'label'    => 'Dans une équipe',
			    'choices'  => array(
				    'inscrit' => 'Inscrits dans une équipe',
				    'noninscrit' => 'Non Inscrit dans une équipe',
				    ),
			    'required' => false,
			    'expanded' => true,
			    'multiple' => true
            	)
            ),
        4 => array(
            'name' => 'save', 
            'type' =>'submit',
            'array' => $array = array(
            	'label' => 'Rechercher'
			    )
            ),
        ); 
		return $formArray;
	}
	
	public function createFormCsgo()
	{
    	$formArray = array(
        0 => array(
            'name' => 'manager', 
            'type' =>'choice',
            'array' => $array = array(
            	'label'    => 'Par Niveau',
			    'choices'  => array('man' => 'Manager'),
			    'required' => false,
			    'expanded' => true,
			    'multiple' => true
			    )
            ),
        1 => array(
            'name' => 'pseudo', 
            'type' =>'text',
            'array' => $array = array(
            	'label'    => 'Chercher par pseudo',
			    'required' => false,
			    )
            ),
        2 => array(
            'name' => 'players', 
            'type' =>'choice',
            'array' => $array =  array(
            	'label'    => 'Inscrits dans une équipe',
			    'choices'  => array(
				    'inscrit' => 'Inscrits dans une équipe',
				    'noninscrit' => 'Non Inscrit dans une équipe',
				    ),
			    'required' => false,
			    'expanded' => true,
			    'multiple' => true
            	)
			),
        3 => array(
            'name' => 'save', 
            'type' =>'submit',
            'array' => $array = array(
            	'label' => 'Rechercher'
			    )
            ),
        ); 
		return $formArray;
	}

	public function createFormTeam()
	{
    	$formArray = array(
        0 => array(
            'name' => 'full', 
            'type' =>'choice',
            'array' => $array =  array(
            	'label'    => 'Par Role',
			    'choices'  => array(
				    'full' => 'Equipes validées',
				    'notfull' => 'Equipes non validées',
				    ),
			    'required' => false,
			    'expanded' => true,
			    'multiple' => true
            	)
            ),
        1 => array(
            'name' => 'name', 
            'type' =>'text',
            'array' => $array = array(
            	'label'    => 'Chercher par nom d\'une équipe',
			    'required' => false,
			    )
            ),
        2 => array(
            'name' => 'save', 
            'type' =>'submit',
            'array' => $array = array(
            	'label' => 'Rechercher'
			    )
            ),
        ); 
		return $formArray;
	}
	
}
