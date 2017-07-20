<?php namespace Medology\Behat\GooglePlaceAutocomplete\Contexts;

use Behat\FlexibleMink\PseudoInterface\SpinnerContextInterface;
use Behat\Mink\Exception\ExpectationException;
use Medology\Behat\GooglePlaceAutocomplete\PseudoInterfaces\MinkContextInterface;

/**
 * {@inheritdoc}
 */
trait GooglePlaceAutocompleteContext
{
    use MinkContextInterface;
    use SpinnerContextInterface;

    /**
     * {@inheritdoc}
     * @When /^(?:I |)choose the first place autocomplete option$/i
     */
    public function chooseFirstOption()
    {
        $pac_first_item = $this->waitFor(function () {
            $pac_first_item = $this->getSession()->getPage()->find('css', '.pac-container>.pac-item:first-child');
            if (!$pac_first_item) {
                throw new ExpectationException('Could not find the first place autocomplete item', $this->getSession());
            }
            return $pac_first_item;
        });

        $pac_first_item->click();
    }
}
