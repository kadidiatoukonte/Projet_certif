<?php

declare(strict_types = 1);

class Admin
{
    protected   $nameAdmin,
                $idAdmin,
                $emailAdmin,
                $passwordAdmin;

    public function __construct(array $array)
    {
        $this->hydrate($array);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
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

    // Setters
    
    /**
     * Set the value of id
     *
     * @param int $id
     * @return  self
     */ 
    public function setIdAdmin( $idAdmin)
    {
        $idAdmin = (int) $idAdmin;
        $this->idAdmin = $idAdmin;
        return $this;
    }
    
    /**
     * Set the value of name
     *
     * @param string $name
     * @return  self
     */ 
    public function setNameAdmin(string $nameAdmin)
    {
        $this->nameAdmin = $nameAdmin;
        return $this;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setEmailAdmin($emailAdmin)
    {
        $this->emailAdmin = $emailAdmin;
        return $this;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setPasswordAdmin($passwordAdmin)
    {
        $this->passwordAdmin = $passwordAdmin;
        return $this;
    }

    // Getters

    /**
     * Get the value of id
     */ 
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    /**
     * Get the value of name
     */ 
    public function getNameAdmin()
    {
        return $this->nameAdmin;
    }
                          
    /**
     * Get the value of mail
     */ 
    public function getemailAdmin()
    {
        return $this->emailAdmin;
    }

    /**
     * Get the value of mdp
     */ 
    public function getPasswordAdmin()
    {
        return $this->passwordAdmin;
    }
}