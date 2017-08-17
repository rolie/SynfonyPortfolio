<?php
/**
 * Cette classe permet de gerer la classe Fichier
 *
 * @author frgerlaa
 */
namespace Aurelie\PortfolioBundle\Entity;

class FichierGestion 
{
    private $_cheminFichier;
    
    function __construct($cheminFichier) 
    {
        $this->set_cheminFichier($cheminFichier);
    }

    function set_cheminFichier($cheminFichier) 
    {
        $this->_cheminFichier = $cheminFichier;
    }
    
    /**
     * cette methode ouvre le fichier specifier dans la variable
     * le parcour et creer les objets Fichier associés
     */
    function getContenuFichier ($typeFichier)
    {
        $xml = simplexml_load_file($this->_cheminFichier);
        $json_string = json_encode($xml);
    
        $result_array = json_decode($json_string, TRUE);
        return new Langages($result_array);        
    }
}
