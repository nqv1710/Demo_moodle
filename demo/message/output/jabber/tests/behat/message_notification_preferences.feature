@core @core_message @javascript
Feature: Manage notification preferences for Jabber
  In order to be notified of jabber messages
  As a user
  I need to be able to update my messaging notification preferences

  Background:
    Given the following "user" exist:
      | username | firstname | lastname | email                |
      | student1 | Student   | 1        | student1@example.com |
    And the following config values are set as admin:
      | messaging | 1 |

  Scenario: Configure and receive jabber notifications
    Given the following config values are set as admin:
      | jabberhost | jabber.org |
      | jabberusername | moodlemessageservice |
      | jabberpassword | password |
    When I log in as "admin"
    And I navigate to "Messaging > Notification settings" in site administration
    And I set the field "jabber" to "1"
    And I press "Save changes"
    And I click on "Settings" "link" in the "Jabber" "table_row"
    And I navigate to "Messaging > Notification settings" in site administration
    And I press "Save changes"
    And I log out
    And I log in as "student1"
    And I open messaging
    And I open messaging settings preferences
    Then I should not see "Notification preferences"
    And I should not see "Jabber"
    And I open the notification popover
    And I follow "Notification preferences"
    And I click on "Jabber" "link"
    And I should see "Jabber ID"
    And I set the field "jabber_jabberid" to "student1@jabber.org"
    And I click on "Save changes" "button" in the ".modal-dialog" "css_element"
    And I am on homepage
    And I open messaging
    And I open messaging settings preferences
    And I should see "Notification preferences"
    And I should see "Jabber"
