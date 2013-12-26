<?php

/*
 * This file is part of the AdminBundle package.
 *
 * (c) SapiensSoftware <http://www.sapienssoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Acme\AdminBundle\Entity;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

use Acme\AdminBundle\Entity\Group;

/**
 * @author Oliver Martin <om@sapienssoftware.com>
 */
class GroupManager
{
	/**
     * Holds the Doctrine entity manager for database interaction
     * @var EntityManager 
     */
    protected $em;

    /**
     * Entity-specific repo, useful for finding entities, for example
     * @var EntityRepository
     */
    protected $repo;

    /**
     * The Fully-Qualified Class Name for our entity
     * @var string
     */
    protected $class;

	public function __construct(EntityManager $em, $class)
    {
        // Even though we have three properties, we only need two constructor arguments...
        $this->em = $em;
        $this->class = $class;
        $this->repo = $em->getRepository($class);
        // ... because we can find the repo using those two
    }

    /**
     * @return Group
     */
	public function createGroup()
	{
		$class = $this->getClass();
		$group = new $class;

		return $group;
	}

	public function findGroupBy( array $criteria )
	{
		return $this->repo->findOneBy($criteria);
	}

	public function insertGroup( Group $group, $andFlush = true )
	{
		$this->em->persist($group);
		if ($andFlush) {
			$this->em->flush();
		}
	} 

    public function updateGroup( Group $group, $andFlush = true )
    {
        $this->em->flush();
    } 

    public function deleteGroup( Group $group, $andFlush = true )
    {
        $this->em->remove($group);
        if ($andFlush) {
            $this->em->flush();
        }
    }
}