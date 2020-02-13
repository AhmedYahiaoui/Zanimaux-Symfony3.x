<?php
/**
 * Created by PhpStorm.
 * User: Black hummer
 * Date: 28/11/2019
 * Time: 23:35
 */

namespace FrontBundle\Repository;
/**
 * EvenementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */


class EvenementRepository extends \Doctrine\ORM\EntityRepository
{

    function Top5(){
        $query=$this->getEntityManager()
            ->createQuery("select c from FrontBundle:Evenement c ORDER BY c.nbr_participant DESC ");
        return $query->getResult();
    }


    function UserEvent(){
        $query=$this->getEntityManager()
            ->createQuery("select c from FrontBundle:Evenement c ORDER BY c.nbr_participant DESC ");
        return $query->getResult();
    }

}