<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Game extends Product {
    private $genere;
    private $materiali = [];

    function __construct($_name, $_price, Category $_category, $_materiali)
    {
        parent::__construct($_name, $_price, $_category);

        $this->setMateriali($_materiali);

    }

    /**
     * Get the value of genere
     */ 
    public function getGenere() {
        return $this->genere;
    }

    /**
     * Set the value of genere
     *
     * @return  self
     */ 
    public function setGenere($genere)
    {
        $this->genere = $genere;

        return $this;
    }

    /**
     * Get the value of materiali
     */ 
    public function getMateriali()
    {
        return $this->materiali;
    }

    /**
     * Set the value of materiali
     *
     * @return  self
     */ 
    public function setMateriali($materiali)
    {
        $this->materiali = $materiali;

        return $this;
    }
    }
