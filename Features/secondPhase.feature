Feature: Product Fulfillment Phase2
  In_order_to fulfill a product
  As_a e-commerce framework
  I_need_to_be_able_to manage fulfillment

Background:
#  Given I create a fulfillment on a product.
   When I get the fulfillment service

Scenario: create fulfillment order
    And I invoke to crate a Fulfillment Order
   Then I get a confirmation that Fulfillment Order was created

Scenario: get fulfillment order preview
    And I invoke to display fulfillment preview for a given order
   Then I get a information about possible fulfillment

Scenario: get fulfillment order
    And I invoke to get a specific Fulfillment Order
   Then I get a all information about this specific Fulfillment Order

Scenario: cancel fulfillment order
    And I invoke to cancel a Fulfillment Order
   Then I get a confirmation that the Order was cancelled
