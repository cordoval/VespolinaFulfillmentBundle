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

       /**
        * @When /^I get the fulfillment service$/
        */
       public function iGetTheFulfillmentService()
       {
           $this->fm = new FulfillmentManager('Vespolina\FulfillmentBundle\Features\Model\DummyFulfillment');
       }

       /**
        * @Given /^I invoke to crate a Fulfillment Order$/
        */
       public function iInvokeToCrateAFulfillmentOrder()
       {
           $product = new Product();
           $this->fulfillment = $this->fm->createFulfillment($product);
       }

       /**
        * @Then /^I get a confirmation that Fulfillment Order was created$/
        */
       public function iGetAConfirmationThatFulfillmentOrderWasCreated()
       {
           assertEquals(1,1);
       }

       /**
        * @Given /^I invoke to display fulfillment preview for a given order$/
        */
       public function iInvokeToDisplayFulfillmentPreviewForAGivenOrder()
       {
           throw new PendingException();
       }

       /**
        * @Then /^I get a information about possible fulfillment$/
        */
       public function iGetAInformationAboutPossibleFulfillment()
       {
           throw new PendingException();
       }

       /**
        * @Given /^I invoke to get a specific Fulfillment Order$/
        */
       public function iInvokeToGetASpecificFulfillmentOrder()
       {
           throw new PendingException();
       }

       /**
        * @Then /^I get a all information about this specific Fulfillment Order$/
        */
       public function iGetAAllInformationAboutThisSpecificFulfillmentOrder()
       {
           throw new PendingException();
       }

       /**
        * @Given /^I invoke to cancel a Fulfillment Order$/
        */
       public function iInvokeToCancelAFulfillmentOrder()
       {
           throw new PendingException();
       }

       /**
        * @Then /^I get a confirmation that the Order was cancelled$/
        */
       public function iGetAConfirmationThatTheOrderWasCancelled()
       {
           throw new PendingException();
       }

}
