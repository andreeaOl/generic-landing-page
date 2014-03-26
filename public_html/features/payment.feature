Feature: payment
  In order to make an online payment,
  I need to access the payment form, fill in my card details and perform payment.

Scenario: Pay online
  Given I access "http://localhost/project1/reg.html"
  And I fill in "email-field" field with "and@gm.com"
  And I complete "cardno" with "4111111111111111"
  When I press a button called "submit-bttn"
  Then I should get:
    """
    We appreciate your purchase!
    Transaction:

    Paymill\Models\Response\Transaction Object
    """

