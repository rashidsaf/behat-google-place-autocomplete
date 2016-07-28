<?php namespace Medology\Behat\GooglePlaceAutocomplete\Contexts;

use Behat\Mink\Exception\ExpectationException;
use Medology\Behat\GooglePlaceAutocomplete\PseudoInterfaces\MinkContextInterface;

/**
 * {@inheritdoc}
 */
trait GooglePlaceAutocompleteContext
{
    use MinkContextInterface;

    /**
     * {@inheritdoc}
     * @When /^(?:I |)choose the first place autocomplete option$/i
     */
    public function chooseFirstOption()
    {
        $pac_first_item = $this->getSession()->getPage()->find('css', '.pac-container>.pac-item:first-child');
        if (!$pac_first_item) {
            throw new ExpectationException('Could not find the first place autocomplete item', $this->getSession());
        }
        $pac_first_item->click();
    }
}
