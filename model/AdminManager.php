<?php

class AdminManager 
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
    public function verifAdmin(Admin $admin)
    {
        $query = $this->getDd()->prepare('SELECT * FROM admins WHERE nameAdmin = :nameAdmin');
        $query->bindValue(':nameAdmin', $admin->getNameAdmin(), PDO::PARAM_STR);

        $query->execute();
        $admins = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($admins as $getAdmin) {
            return new Admin($getAdmin);
        }
    }

    /**
     * verif if admin as disponibility for sign up
     *
     * @param Admin $admin
     * @return self
     */
    public function verifAdminDispo(Admin $admin)
    {
        $query = $this->getDb()->prepare('SELECT * FROM admins WHERE nameAdmin = :nameAdmin');
        $query->bindValue(':nameAdmin', $admin->getNameAdmin(), PDO::PARAM_STR);
        $query->execute();
        $admins = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($admins as $getAdmin) {
            return new Admin($getAdmin);
        }
    }

    /**
     * create admin
     *
     * @param Admin $admin
     * @return self
     */
    public function createAdmin(Admin $admin)
    {
        $query = $this->getDb()->prepare('INSERT INTO admins(nameAdmin, passwordAdmin, emailAdmin) VALUES(:nameAdmin, :passwordAdmin, :emailAdmin)');
        $query->bindValue(':nameAdmin', $admin->getNameAdmin(), PDO::PARAM_STR);     
        $query->bindValue(':emailAdmin', $admin->getEmailAdmin(), PDO::PARAM_STR);
        $query->bindValue(':passwordAdmin', $admin->getPasswordAdmin(), PDO::PARAM_STR);
        $query->execute();
    }
    /**
     * update admin
     *
     * @param Admin $admin
     * @return self
     */
    public function updateAdmin(Admin $admin)
    {
        $updatedb = $this->_db->prepare('UPDATE admin SET emailAdmin = :emailAdmin WHERE idAdmin = :idAdmin');
        $updatedb->bindValue(':idAdmin', $admin->getIdAdmin(), PDO::PARAM_INT);
        $updatedb->bindValue(':emailAdmin', $admin->getEmailAdmin(), PDO::PARAM_STR);
        $updatedb->execute();
    }

  
  /**
   * Get all admins. It returns an array of objects $admin
   *
   * @return array $arrayAdmins
   */
  public function getAdmins() 
  {
    $arrayOfAdmins = [];
    $query = $this->getDb()->query('SELECT * FROM admins');
    $admins = $query->fetchAll(PDO::FETCH_ASSOC);

    // A chaque tour, on instancie un nouvel objet User qu'on stocke dans $arrayOfAdmins[]
    foreach ($admins as $admin) {
      $arrayOfAdmins[] = new Admin($admin);
    }
    // On renvoie le tableau contenant tous nos objets Admin
    return $arrayOfAdmins;
  }

  public function getAdmin(string $nameAdmin)
	{
		$query = $this->getDb()->prepare('SELECT * FROM admins WHERE nameAdmin = :nameAdmin');
		$query->bindValue("nameAdmin", $nameAdmin, PDO::PARAM_STR);
		$query->execute();
	}

  /**
   * Add admin in DB
   *
   * @param Admin $admin
   */
  public function addAdmin(Admin $admin)
  {
    $query = $this->getDb()->prepare('INSERT INTO admins(nameAdmin, emailAdmin, passwordAdmin) VALUES(:nameAdmin, :emailAdmin, :passwordAdmin)');
    $query->bindValue(':nameAdmin', $admin->getNameAdmin(), PDO::PARAM_STR);
    $query->bindValue(':emailAdmin', $admin->getEmailAdmin(), PDO::PARAM_STR);
    $query->bindValue(':passwordAdmin', $admin->getPasswordAdmin(), PDO::PARAM_STR);
    $query->execute();
  }

}
