<?php

declare(strict_types = 1);

class Contact
{

    protected $idContact,
              $nameContact,
              $emailContact,
              $messageContact;

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
        foreach ($array as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }      
    
    /**
     * Get the value of idContact
     */ 
    public function getIdContact()
    {
        return $this->idContact;
    }

    /**
     * Get the value of nameContact
     */ 
    public function getNameContact()
    {
                return $this->nameContact;
    }

    /**
     * Get the value of emailContact
     */ 
    public function getEmailContact()
    {
                return $this->emailContact;
    }

    /**
     * Get the value of messageContact
     */ 
    public function getMessageContact()
    {
                return $this->messageContact;
    }

    /**
     * Set the value of idContact
     *
     * @return  self
     */ 
    public function setIdContact($idContact)
    {
        $this->idContact = $idContact;

        return $this;
    }

    /**
     * Set the value of nameContact
     *
     * @return  self
     */ 
    public function setNameContact($nameContact)
    {
                $this->nameContact = $nameContact;

                return $this;
    }

    /**
     * Set the value of emailContact
     *
     * @return  self
     */ 
    public function setEmailContact($emailContact)
    {
                $this->emailContact = $emailContact;

                return $this;
    }

    /**
     * Set the value of messageContact
     *
     * @return  self
     */ 
    public function setMessageContact($messageContact)
    {
                $this->messageContact = $messageContact;

                return $this;
    }
}