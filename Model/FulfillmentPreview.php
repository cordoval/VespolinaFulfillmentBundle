<?php

namespace Vespolina\FulfillmentBundle\Model;

use Vespolina\FulfillmentBundle\Model\FulfillmentPreviewInterface;

abstract class FulfillmentPreview implements FulfillmentPreviewInterface
{
    private $state;
    private $product;

    public function __construct($product) {
        $this->product = $product;
    }

    public function setState($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }

    public function getProduct() {
        return $this->product;
    }

    public function setProduct($product) {
        $this->product = $product;
    }
}