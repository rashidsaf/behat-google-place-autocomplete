<?php namespace Medology\Behat\GooglePlaceAutoComplete\Contexts;

use Behat\Behat\Context\Context;
use Behat\Mink\Exception\ExpectationException;
use Medology\Behat\Mink\UsesFlexibleContext;
use Medology\Spinner;

/**
 * A context for handling tests for the Google Place Auto-complete Javascript script.
 */
class GooglePlaceAutoCompleteContext implements Context
{
    use UsesFlexibleContext;

    /**
     * Chooses the first address in the auto-complete popup.
     *
     * @When   /^(?:I |)choose the first place auto-complete option$/i
     * @throws ExpectationException If the first address is not found
     */
    public function chooseFirstOption()
    {
        $pac_first_item = Spinner::waitFor(function () {
            $pac_first_item = $this->flexibleContext->getSession()->getPage()->find(
                'css',
                '.pac-container>.pac-item:first-child'
            );

            if (!$pac_first_item) {
                throw new ExpectationException(
                    'Could not find the first place auto-complete item',
                    $this->flexibleContext->getSession()
                );
            }

            return $pac_first_item;
        });

        $pac_first_item->click();
    }
}
