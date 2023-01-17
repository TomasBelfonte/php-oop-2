<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Food extends product {

    private $calories;
    private $ingredients = [];

    function __construct($_name, $_price, Category $_category, $_calories) {

        parent::__construct($_name, $_price, $_category);
    }

    /**
     * Get the value of calories
     */ 
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * Set the value of calories
     *
     * @return  self
     */ 
    public function setCalories($calories)
    {
        $this->calories = $calories;

        return $this;
    }

    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }
}

?>