<?php

class LoginManager 
{

  private $_db;

  /**
   * Constructor
   *
   * @param PDO $db
   */
  public function __construct(PDO $db) {
    $this->setDb($db);
  }

  /**
   * Set the value of _db
   *
   * @param PDO $db
   * @return  self
   */ 
  public function setDb(PDO $db) {
    $this->_db = $db;
    return $this;
  }

  /**
   * Get the value of _db
   */ 
  public function getDb() {
    return $this->_db;
  }

  /**
     * verif if admin exist
     *
     * @param Admin $admin
     * @return self
     */
    public function verifLogin(Login $login)
    {
        $query = $this->getBdd()->prepare('SELECT * FROM logins WHERE name = :name');
        $query->bindValue(':name', $admin->getName(), PDO::PARAM_STR);

        $query->execute();
        $logins = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($logins as $getLogin) {
            return new Login($getLogin);
        }
    }

    /**
     * verif if admin as disponibility for sign up
     *
     * @param Admin $admin
     * @return self
     */
    public function verifLoginDispo(Login $login)
    {
        $query = $this->getdb()->prepare('SELECT * FROM logins WHERE name = :name');
        $query->bindValue(':name', $admin->getName(), PDO::PARAM_STR);
        $query->execute();
        $logins = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($logins as $getLogin) {
            return new Login($getLogin);
        }
    }

    /**
     * create admin
     *
     * @param Admin $admin
     * @return self
     */
    public function createLogin(Login $login)
    {
        $query = $this->gedb()->prepare('INSERT INTO logins(name, mdp, mail) VALUES(:name, :mdp, :mail)');
        $query->bindValue(':name', $login->getName(), PDO::PARAM_STR);     
        $query->bindValue(':mail', $login->getMail(), PDO::PARAM_STR);
        $query->bindValue(':mdp', $login->getMdp(), PDO::PARAM_STR);
        $query->execute();
    }
    /**
     * update admin
     *
     * @param Admin $admin
     * @return self
     */
    public function updateLogin(Login $login)
    {
        $updatedb = $this->_db->prepare('UPDATE login SET mail = :mail WHERE id = :id');
        $updatedb->bindValue(':id', $login->getId(), PDO::PARAM_INT);
        $updatedb->bindValue(':mail', $login->getMail(), PDO::PARAM_STR);
        $updatedb->execute();
    }

  
  /**
   * Get all admins. It returns an array of objects $admin
   *
   * @return array $arrayAdmins
   */
  public function getLogins() 
  {
    $arrayOfLogins = [];
    $query = $this->getDb()->query('SELECT * FROM logins');
    $logins = $query->fetchAll(PDO::FETCH_ASSOC);

    // A chaque tour, on instancie un nouvel objet User qu'on stocke dans $arrayOfAdmins[]
    foreach ($logins as $login) {
      $arrayOfLogins[] = new Login($login);
    }
    // On renvoie le tableau contenant tous nos objets Admin
    return $arrayOfLogins;
  }

  public function getLogin(string $name)
	{
		$query = $this->getDb()->prepare('SELECT * FROM logins WHERE name = :name');
		$query->bindValue("name", $name, PDO::PARAM_STR);
		$query->execute();
	}

  /**
   * Add admin in DB
   *
   * @param Admin $admin
   */
  public function addLogin(Login $login)
  {
    $query = $this->getDb()->prepare('INSERT INTO logins(name, mail, mdp) VALUES(:name, :mail, :mdp)');
    $query->bindValue(':name', $login->getName(), PDO::PARAM_STR);
    $query->bindValue(':mail', $login->getMail(), PDO::PARAM_STR);
    $query->bindValue(':mdp', $login->getMdp(), PDO::PARAM_STR);
    $query->execute();
  }

}


 ?>
