Feature: Select an address using Google Place Autocomplete
  In order to quickly choose an address
  As a user
  I need to be able to use Google's Place Autocomplete javascript tool

  Scenario Outline: Use Google Places Autocomplete to populate all of the address fields
    Given I am on "/"
     When I fill in "Your Street Address" with "<input>"
      And I focus the "Your Street Address" field
     Then I should see "USA"
     When I choose the first place autocomplete option
     Then the "Your Street Address" field should contain "<address>"
      And the "City" field should contain "<city>"
      And the "State" field should contain "<state>"
     Then the "Zip Code" field should contain "<postal>"

     Examples:
     | input          | address                | city    | state | postal |
     | 5821 Southwest | 5821 Southwest Freeway | Houston | TX    | 77057  |
