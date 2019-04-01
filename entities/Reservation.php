<?php

declare(strict_types = 1);

class Reservation
{

    protected $idReservation,
              $nameReservation,
              $arriveReservation,
              $departReservation,
              $capaciteReservation;

    public function __construct(array $array)
    {
        $this->hydrate($array);
    }

    /**
     * Hydratation
     *
     * @param array $array
     *
     */
    public function hydrate(array $array)
    {
        foreach ($array as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

    /**
     * Get the value of idReservation
     */ 
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * Get the value of nameReservation
     */ 
    public function getNameReservation()
    {
                return $this->nameReservation;
    }

    /**
     * Get the value of arriveReservation
     */ 
    public function getArriveReservation()
    {
                return $this->arriveReservation;
    }

    /**
     * Get the value of departReservation
     */ 
    public function getDepartReservation()
    {
                return $this->departReservation;
    }

    /**
     * Get the value of capaciteReservation
     */ 
    public function getCapaciteReservation()
    {
                return $this->capaciteReservation;
    }
    

    /**
     * Set the value of idReservation
     *
     * @return  self
     */ 
    public function setIdReservation($idReservation)
    {
        $this->idReservation = $idReservation;

        return $this;
    }

    /**
     * Set the value of nameReservation
     *
     * @return  self
     */ 
    public function setNameReservation($nameReservation)
    {
                $this->nameReservation = $nameReservation;

                return $this;
    }

    /**
     * Set the value of arriveReservation
     *
     * @return  self
     */ 
    public function setArriveReservation($arriveReservation)
    {
                $this->arriveReservation = $arriveReservation;

                return $this;
    }

    /**
     * Set the value of departReservation
     *
     * @return  self
     */ 
    public function setDepartReservation($departReservation)
    {
                $this->departReservation = $departReservation;

                return $this;
    }

    /**
     * Set the value of capaciteReservation
     *
     * @return  self
     */ 
    public function setCapaciteReservation($capaciteReservation)
    {
                $this->capaciteReservation = $capaciteReservation;

                return $this;
    }
}