<?php namespace Medology\Behat\GooglePlaceAutocomplete\PseudoInterfaces;

use Behat\Mink\Exception\ExpectationException;

/**
 * A context for handling tests for the Gooogle Place Autocomplete Javascript script.
 */
trait GooglePlaceAutocompleteContextInterface
{
    /**
     * Chooses the first address in the autocomplete popup.
     *
     * @throws ExpectationException If the first address is not found
     */
    abstract public function chooseFirstOption();
}
