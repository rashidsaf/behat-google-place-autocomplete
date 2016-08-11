Feature: Select an address using Google Place Autocomplete
  In order to quickly choose an address
  As a user
  I need to be able to use Google's Place Autocomplete javascript tool

   Scenario: Use Google Places Autocomplete to populate all of the address fields
      Given I am on "/"
       When I fill in "Your Street Address" with "5821 Southwest Freeway, Houston, TX"
        And I focus the "Your Street Address" field
       Then I should see "United States"
       When I choose the first place autocomplete option
       Then the "Your Street Address" field should contain "5821 Southwest Freeway"
        And the "City" field should contain "Houston"
        And I select "Texas" from "State"
        And the "Zip Code" field should contain "77057"
