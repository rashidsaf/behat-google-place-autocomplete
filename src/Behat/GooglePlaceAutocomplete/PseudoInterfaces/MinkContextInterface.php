<?php namespace Medology\Behat\GooglePlaceAutocomplete\PseudoInterfaces;

use Behat\Mink\Session;

/**
 * Pseudo interface for tracking the methods of the MinkContext.
 *
 * @see Behat\MinkExtension\Context\MinkContext.
 */
trait MinkContextInterface
{
    /**
     * Clicks current node.
     */
    abstract public function click();

    /**
     * Returns the Mink session.
     *
     * @param  string|null $name name of the session OR active session will be used
     * @return Session
     */
    abstract public function getSession($name = null);
}
