<?php

namespace Rpg;

abstract class AbstractCharacter
{
    public function __construct(string $name)
    {
        return $this->setName($name);
    }

    /**
     * @var string
     */

    protected $name;

    /**
     * @var int
     */

    protected $strength;

    /**
     * Set the value of strength
     *
     * @return  self
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * @var int
     */

    protected $lifePoints;

    /**
    * Get the value of lifePoints
    */

    public function getLifePoints(): int
    {
        return $this->lifePoints;
    }

    /**
     * Set the value of lifePoints
     *
     * @return  self
     */
    public function setLifePoints($lifePoints)
    {
        $this->lifePoints = $lifePoints;

        return $this;
    }
    

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    

    public function attack(object $character): int
    {
        $die = rand(1, 20); // die = dé en anglais
        if ($die <= $this->strength) {
            $this->takeHit($character->strength);
            return $this->strength;
        }
        return 0;
    }

    public function takeHit(int $strength): bool
    {
        $this->lifePoints = $this->lifePoints - $strength;
        return $this->hasSurrendered();
    }

    public function hasSurrendered(): bool
    {
        if ($this->getLifePoints() < 10) {
            return true;
        } else {
            return false;
        }
    }
}
