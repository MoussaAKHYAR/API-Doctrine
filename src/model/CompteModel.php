<?php
namespace src\model;
use system\Model;

class CompteModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function addCompteSimple($compte)
  {
    $this->em->persist($compte);
    $this->db->flush();
    //return $compte->getId();
  }

  public function getCompte($numero)
  {
    $compte = $this->em->createQuery("SELECT c FROM Compte c WHERE c.numero=:numero")
    ->setParameter('numero',$numero)
    ->getOneOrNullResult();

    return $compte;
  }
}

?>