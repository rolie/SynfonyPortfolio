<?php
/**
 * Cette classe represente l'information principale des fichiers
 *
 * @author frgerlaa
 */
namespace Aurelie\PortfolioBundle\Entity;

abstract class Fichier 
{
    private $_infoPrincipale;
    
    public function __construct(Array $donnees) 
    {
        $this->hydrater($donnees);
    }
    
    /**
     * Methode qui remplie les variables de la classe
     */
    public function hydrater(Array $donnees)
    {
        //parcours des valeurs donnees dans le tableau en parametre
        foreach ($donnees as $key => $value)
        {
            //construction du nom du setter
            $methode = 'set_'.ucfirst($key);
            
            //si le setter existe, on assigne la valeur
            if (method_exists($this, $methode))
            {
                $this->$methode($value);
            }
        }
    }
    
    public function get_infoPrincipale() 
    {
        return $this->_infoPrincipale;
    }

    public function set_infoPrincipale($infoPrincipale) 
    {
        $this->_infoPrincipale = $infoPrincipale;
    }
}
