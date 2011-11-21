<?php

namespace Vespolina\FulfillmentBundle\Model;

use Vespolina\FulfillmentBundle\Model\FulfillmentInterface;

abstract class Fulfillment implements FulfillmentInterface
{
    private $status;

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }
}