<?php
/**
 * Cette classe represente les langages de programmation
 *
 * @author frgerlaa
 */
class Formations extends Fichier
{
    private $_lieux, $_description, $_date;
    
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
    function get_lieux() {
        return $this->_lieux;
    }

    function get_description() {
        return $this->_description;
    }

    function get_date() {
        return $this->_date;
    }

    function set_lieux($_lieux) {
        $this->_lieux = $_lieux;
    }

    function set_description($_description) {
        $this->_description = $_description;
    }

    function set_date($_date) {
        $this->_date = $_date;
    }


}
