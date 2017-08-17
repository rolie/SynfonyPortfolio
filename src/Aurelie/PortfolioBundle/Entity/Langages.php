<?php
/**
 * Cette classe represente les langages de programmation
 *
 * @author frgerlaa
 */
namespace Aurelie\PortfolioBundle\Entity;

class Langages extends Fichier
{
    private $_niveau;
    
    public function __construct(Array $donnees) 
    {
        $this->hydrater($donnees);
    }
    
    public function get_niveau() 
    {
        return $this->_niveau;
    }

    public function set_niveau($niveau) 
    {
        $this->_niveau = $niveau;
    }
}
