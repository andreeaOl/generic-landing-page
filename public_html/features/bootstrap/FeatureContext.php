<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
 
//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }
 
      /**
     * @Given /^I access "([^"]*)"$/
     */
    public function iAccess($arg1)
    {
        $this->getSession()->visit($this->locatePath($arg1));
    }
     /**
     * @Given /^I fill in "([^"]*)" field with "([^"]*)"$/
     */

    public function iFillInFieldWith($arg1, $arg2)
    {
        $this->getSession()->getPage()->fillField($arg1, $arg2);
    }
    /**
     * @Given /^I complete "([^"]*)" with "([^"]*)"$/
     */
    public function iCompleteWith($arg1, $arg2)
    {
        $this->getSession()->getPage()->fillField($arg1, $arg2);
    }


    /**
     * @When /^I press a button called "([^"]*)"$/
     */
    public function iPressAButtonCalled($arg1)
    {
        $this->getSession()->getPage()->pressButton($arg1);
        //$this->wait(2000);   // wait 2sec
    }



    /**
     * @Then /^I should get:$/
     */
    public function iShouldGet(PyStringNode $string)
    {
        $this->getSession()->getPage()->find('xpath', '//div[contains(., "'.$string.'")]');
    }

}
