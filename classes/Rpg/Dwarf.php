<?php

namespace Rpg;

class Dwarf extends AbstractCharacter
{
    public function __construct(string $name)
    {
        
        $this->setStrength(15);
        $this->setLifePoints(100);
        parent::__construct($name);
    }
}
