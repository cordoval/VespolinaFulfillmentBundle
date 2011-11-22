<?php

namespace Vespolina\FulfillmentBundle\Model;

use Vespolina\FulfillmentBundle\Model\FulfillmentInterface;

abstract class Fulfillment implements FulfillmentInterface
{
    private $state;

    public function setState($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }
}