<?php

use Behat\Behat\Context\Context;
use Behat\FlexibleMink\Context\FlexibleContext;
use Behat\FlexibleMink\PseudoInterface\MinkContextInterface;
use Medology\Behat\GooglePlaceAutocomplete\Contexts\GooglePlaceAutocompleteContext;

/**
 * Used for interacting with the site as a web page.
 */
class WebContext extends FlexibleContext implements Context
{
    use GooglePlaceAutocompleteContext;
    use MinkContextInterface;
}
