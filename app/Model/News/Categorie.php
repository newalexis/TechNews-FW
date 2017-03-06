<?php
namespace Model\News;

class Categorie
{
    private $IDCATEGORIE,
            $LIBELLECATEGORIE,
            $ROUTECATEGORIE;
    
    public function __construct(
        # : Constructeur Automatique : Google OC : 
        # TP : un système de news - Programmez en orienté objet en PHP
    
        $IDCATEGORIE,
        $LIBELLECATEGORIE,
        $ROUTECATEGORIE) {
        
            $this->IDCATEGORIE      = $IDCATEGORIE;
            $this->LIBELLECATEGORIE = $LIBELLECATEGORIE;
            $this->ROUTECATEGORIE   = $ROUTECATEGORIE;
            
    }
            
    /**
     * @return the $IDCATEGORIE
     */
    public function getIDCATEGORIE()
    {
        return $this->IDCATEGORIE;
    }

    /**
     * @return the $LIBELLECATEGORIE
     */
    public function getLIBELLECATEGORIE()
    {
        return $this->LIBELLECATEGORIE;
    }

    /**
     * @return the $ROUTECATEGORIE
     */
    public function getROUTECATEGORIE()
    {
        return $this->ROUTECATEGORIE;
    }

    
    
}

