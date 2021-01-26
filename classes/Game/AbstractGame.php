<?php

namespace Game;

//Une classe abstraite sert de "pattern" pour créer d'autre classes qui hériterons de ses caractéristiques, on ne peut pas l'instancier
abstract class AbstractGame
{
    /**
     * @var string
     */
    protected $name;
    
    /**
     * Get the value of name
     *
     * @return  string
     */
    public function getName()//Méthode qui sert à l'instanciation de la propriété
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */
    public function setName(string $name)//Méthode pour donner une valeur à la propriété
    {
        $this->name = $name;

        return $this;
    }


    /**
      * @var float
      */

    protected $price;


    /**
     * Get the value of price
     */
    public function getPrice()//Méthode qui sert à l'instanciation de la propriété
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)//Méthode pour donner une valeur à la propriété
    {
        $this->price = $price;

        return $this;
    }
}
