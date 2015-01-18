Feature: Testing
  In order to teach Behat
  As a teacher
  I want to demonstrate how to install and create features

  Scenario: Home Page
    Given I am on the homepage
    Then I should see "New website coming soon."

  Scenario: Dashboard is locked to guests
    When I go to "home"
    Then the url should match "auth/login"