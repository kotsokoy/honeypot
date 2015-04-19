<?php

namespace GGG\Bundle\NoticesBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AppareilRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AppareilRepository extends EntityRepository
{

	public function recherche($motif){
		
		/* on recupere chaque appareil, leur id, le nom de leur marque et de leur categorie*/
		$sql_query = $this->getEntityManager()->createQuery('SELECT a.id as id, a.nom as nom, m.nom as marque, c.nom as categorie FROM GGGNoticesBundle:Appareil a JOIN a.marque m JOIN a.categorie c WHERE a.nom LIKE :motif OR m.nom LIKE :motif ORDER BY a.nom ASC')->setParameter('motif','%'.$motif.'%');
		//var_dump("sql_query",$sql_query);

		$res = $sql_query->getResult();

		//var_dump('RES_TEMP',$res_temp);


		return $res;

	}

}