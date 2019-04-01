<?php

class ReservationManager
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
    public function createReservations(Reservation $reservation)
    {
    	$query = $this->getDb()->prepare('INSERT INTO reservations(nameReservation, arriveReservation, departReservation, capaciteReservation) VALUES(:nameReservation, :arriveReservation, :departReservation, :capaciteReservation)');
        $query->bindValue('nameReservation', $reservation->getNameReservation(), PDO::PARAM_STR);
        $query->bindValue('arriveReservation', $reservation->getArriveReservation(), PDO::PARAM_STR);
        $query->bindValue('departReservation', $reservation->getDepartReservation(), PDO::PARAM_STR);
        $query->bindValue('capaciteReservation', $reservation->getCapaciteReservation(), PDO::PARAM_STR);
        $query->execute();
    }

    /**
    * get TABLENAME
    *
    * @return self
    */
    public function getReservations()
    {
    	$query = $this->getDb()->prepare('SELECT * FROM reservations');
    	$query->execute();
    	$allReservations = $query->fetchAll(PDO::FETCH_ASSOC);

    	$arrayOfReservations = [];
    	foreach ($allReservations as $reservations)
    	{
    		$arrayOfReservations[] = new Reservation($reservations);
    	}
    	return $arrayOfReservations;
    }

    /**
    * get TABLENAME By Id
    *
    * @param [int] $id
    * @return self
    */
    public function getReservationsById($idReservation)
    {
    	$idReservation = (int) $idReservation;
    	$query = $this->getDb()->prepare('SELECT * FROM reservations WHERE idReservation = :idReservation');
    	$query->bindValue('idReservation', $idReservation, PDO::PARAM_INT);
    	$query->execute();
    }

    /**
    * delete TABLENAMEById
    *
    * @param [int] $id
    * @return self
    */
    public function deleteReservationsById($idReservation)
    {
    	$idReservation = (int) $idReservation;
    	$query = $this->getDb()->prepare('DELETE FROM reservations WHERE idReservation = :idReservation');
    	$query->bindValue('idReservation', $idReservation, PDO::PARAM_INT);
    	$query->execute();
    }

    /**
    * update TABLENAME
    *
    * @param [ENTITYNAME] $ENTITY
    * @return self
    */
    public function updateReservations(Reservation $reservation)
    {
    	$query = $this->getDb()->prepare('UPDATE reservations SET nameReservation = :nameReservation WHERE idReservation = :idReservation');
    	$query->bindValue('nameReservation', $reservation->getNameReservation(), PDO::PARAM_STR);
    	$query->bindValue('idReservation', $reservation->getIdReservation(), PDO::PARAM_INT);
    	$query->execute();
    }
}