<?php

namespace Vespolina\FulfillmentBundle\Features\Context;

use Behat\BehatBundle\Context\BehatContext,
    Behat\BehatBundle\Context\MinkContext;
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use  Vespolina\FulfillmentBundle\Features\Model\Product;
use  Vespolina\FulfillmentBundle\Features\Model\DummyFulfillment;
use  Vespolina\FulfillmentBundle\Features\Model\FulfillmentManager;
//
// Require 3rd-party libraries here:
//
   require_once 'PHPUnit/Autoload.php';
   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Feature context.
 */
class FeatureContext extends BehatContext //MinkContext if you want to test web
{
//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        $container = $this->getContainer();
//        $container->get('some_service')->doSomethingWith($argument);
//    }
//

      protected $fulfillment;
      protected $fm;
    
      /**
        * @Given /^I create a fulfillment on a product$/
        */
       public function iCreateAFulfillmentOnAProduct()
       {
           $product = new Product();
           $this->fm = new FulfillmentManager('Vespolina\FulfillmentBundle\Features\Model\DummyFulfillment');
           $this->fulfillment = $this->fm->createFulfillment($product);
       }

       /**
        * @Then /^I should see fulfillment order of this product initialized$/
        */
       public function iShouldSeeFulfillmentOrderOfThisProductInitialized()
       {
            assertInstanceOf('Vespolina\FulfillmentBundle\Model\FulfillmentInterface', $this->fulfillment);
       }

       /**
        * @When /^I set state of the fulfillment order to "([^"]*)"$/
        */
       public function iSetStateOfTheFulfillmentOrderTo($argument1)
       {
           $this->fulfillment->setState('Processing');
       }

       /**
        * @Then /^I should read back "([^"]*)" for state$/
        */
       public function iShouldReadBackForState($argument1)
       {
           assertEquals('Processing', $this->fulfillment->getState());
       }
}
