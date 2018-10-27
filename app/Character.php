<?php

namespace App;

class Character{
    private $name;
    private $height;
    private $mass;
    private $hairColor;
    private $skinColor;
    private $eyeColor;
    private $birthYear;
    private $gender;



    /**
     * Get the value of name
     */
    public function getName()
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

    /**
     * Get the value of height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of mass
     */
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * Set the value of mass
     *
     * @return  self
     */
    public function setMass($mass)
    {
        $this->mass = $mass;

        return $this;
    }

    /**
     * Get the value of hairColor
     */
    public function getHairColor()
    {
        return $this->hairColor;
    }

    /**
     * Set the value of hairColor
     *
     * @return  self
     */
    public function setHairColor($hairColor)
    {
        $this->hairColor = $hairColor;

        return $this;
    }

    /**
     * Get the value of skinColor
     */
    public function getSkinColor()
    {
        return $this->skinColor;
    }

    /**
     * Set the value of skinColor
     *
     * @return  self
     */
    public function setSkinColor($skinColor)
    {
        $this->skinColor = $skinColor;

        return $this;
    }

    /**
     * Get the value of eyeColor
     */
    public function getEyeColor()
    {
        return $this->eyeColor;
    }

    /**
     * Set the value of eyeColor
     *
     * @return  self
     */
    public function setEyeColor($eyeColor)
    {
        $this->eyeColor = $eyeColor;

        return $this;
    }

    /**
     * Get the value of birthYear
     */
    public function getBirthYear()
    {
        return $this->birthYear;
    }

    /**
     * Set the value of birthYear
     *
     * @return  self
     */
    public function setBirthYear($birthYear)
    {
        $this->birthYear = $birthYear;

        return $this;
    }

    /**
     * Get the value of gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }
}
