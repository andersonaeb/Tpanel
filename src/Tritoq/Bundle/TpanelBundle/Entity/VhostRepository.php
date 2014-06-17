<?php

namespace Tritoq\Bundle\TpanelBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;

/**
 * VhostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VhostRepository extends EntityRepository
{
    public function getByIdDesc($isarray = false)
    {
        $qb = $this->createQueryBuilder('t');
        $qb->select("t.id, t.user, t.password, t.domain, t.ip, t.adminEmail, t.dateCreated")
            ->orderBy('t.id', 'desc');

        if ($isarray === true) {
            return $qb->getQuery()->getResult(Query::HYDRATE_SCALAR);
        }

        return $qb->getQuery()->getResult();
    }
}
