<?php namespace Medology\Behat\GooglePlaceAutocomplete\PseudoInterfaces;

use Behat\Mink\Exception\ExpectationException;

trait GooglePlaceAutocompleteInterface
{
    /**
     * Chooses the first address in the autocomplete popup.
     *
     * @throws ExpectationException If the first address is not found
     */
    abstract public function chooseFirstOption();
}
