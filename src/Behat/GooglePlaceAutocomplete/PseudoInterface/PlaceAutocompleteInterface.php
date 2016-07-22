<?php namespace features\contexts;

use Behat\Mink\Exception\ExpectationException;

trait PlaceAutocomplete {

    /**
     * Chooses the first address in the autocomplete popup.
     *
     * @throws ExpectationException If the first address is not found
     */
    abstract public function chooseFirstOption();
}