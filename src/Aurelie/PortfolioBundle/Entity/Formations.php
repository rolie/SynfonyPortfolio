<?php
/**
 * Cette classe represente les langages de programmation
 *
 * @author frgerlaa
 */
namespace Aurelie\PortfolioBundle\Entity;

class Experiences extends Formations
{
    private $_typeContrat;
    
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
    function get_typeContrat() 
    {
        return $this->_typeContrat;
    }

    function set_typeContrat($_typeContrat) 
    {
        $this->_typeContrat = $_typeContrat;
    }
}
