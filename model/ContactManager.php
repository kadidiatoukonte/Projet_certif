<?php
declare(strict_types = 1);

class ContactManager
{
    protected $_db;

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    /**
    * get value of Bdd
    *
    * @return self
    */
    public function getDb()
    {
        return $this->_db;
    }

    /**
    * set value of Bdd
    *
    * @param [PDO] $bdd
    * @return self
    */
    public function setDb(PDO $db)
    {
        $this->_db = $db;
        return $this;
    }

    /**
    * create TABLENAME
    *
    * @param [ENTITYNAME] $ENTITY
    * @return self
    */
    public function createContacts(Contact $contact)
    {
        $query = $this->getDb()->prepare('INSERT INTO contacts (nameContact, emailContact, messageContact) VALUES(:nameContact, :emailContact, :messageContact)');
        $query->bindValue('nameContact', $contact->getNameContact(), PDO::PARAM_STR);
        $query->bindValue('emailContact', $contact->getEmailContact(), PDO::PARAM_STR);
        $query->bindValue('messageContact', $contact->getMessageContact(), PDO::PARAM_STR);
        $query->execute();
    }

    /**
    * get TABLENAME
    *
    * @return self
    */
    public function getContacts()
    {
        $query = $this->getDb()->prepare('SELECT * FROM contacts');
        $query->execute();
        $allContacts = $query->fetchAll(PDO::FETCH_ASSOC);

        $arrayOfContacts = [];
        foreach ($allContacts as $contacts)
        {
            $arrayOfContacts[] = new Contact($contacts);
        }
        return $arrayOfContacts;
    }

    /**
    * get TABLENAME By Id
    *
    * @param [int] $id
    * @return self
    */
    public function getContactsById($idContact)
    {
        $idContact = (int) $idContact;
        $query = $this->getDb()->prepare('SELECT * FROM contacts WHERE idContact = :idContact');
        $query->bindValue('idContact', $idContact, PDO::PARAM_INT);
        $query->execute();
    }
}