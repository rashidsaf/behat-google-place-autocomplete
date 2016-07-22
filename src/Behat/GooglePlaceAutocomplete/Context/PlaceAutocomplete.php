<?php

namespace Behat\GooglePlaceAutocomplete\Contexts;

use Behat\Mink\Exception\ExpectationException;
use Behat\MinkExtension\Context\MinkContext;

class PlaceAutocomplete extends MinkContext {

    /**
     * {@inheritdoc}
     * @When /^(?:I |)choose the first (P|p)lace (A|a)utocomplete option$/
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