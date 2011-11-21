Feature: Product Fulfillment
  In_order_to fulfill a product
  As_a e-commerce framework
  I_need_to_be_able_to manage fulfillment 

Background:
  Given I create a fulfillment on a product

Scenario: init fulfillment status
   Then I should see fulfillment order of this product initialized

Scenario: set fulfillment status
   When I set status of the fulfillment order to "processing"
   Then I should read back "processing" for status

Scenario: read fulfillment status
   When I set status of the fulfillment order to "fulfilled"
   Then I should read back "fulfilled" for status
