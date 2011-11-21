<?php
namespace Vespolina\FulfillmentBundle\Features\Model;

use Vespolina\FulfillmentBundle\Model\FulfillmentManager as AbstractFulfillmentManager;
use Vespolina\FulfillmentBundle\Model\FulfillmentInterface;

class FulfillmentManager extends AbstractFulfillmentManager
{
    public function __construct($fulfillmentClass) {
        parent::__construct($fulfillmentClass);
    }

    /**
     * Find a fulfillment collection by the criteria
     *
     * @param array $criteria
     * @param mixed $orderBy
     * @param mixed $limit
     * @param mixed $offset
     *
     * @return array
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {

    }   

    /**
     * Find a Fulfillment by its object identifier
     *
     * @param $id
     * @return Vespolina\FulfillmentBundle\Model\FulfillmentInterface
     */
    public function findFulfillmentById($id)
    {

    }

    /**
     * Update and persist the fulfillment
     *
     * @param Vespolina\FulfillmentBundle\Model\FulfillmentInterface $fulfillment
     * @param Boolean $andFlush Whether to flush the changes (default true)
     */
    public function updateFulfillment(FulfillmentInterface $fulfillment, $andFlush = true)
    {
        
    }

}