<?php

use Behat\Behat\Context\Context;
use Medology\Behat\Mink\FlexibleContext;
use Medology\Behat\GooglePlaceAutocomplete\Contexts\GooglePlaceAutocompleteContext;

/**
 * Used for interacting with the site as a web page.
 */
class WebContext extends FlexibleContext implements Context
{
    use GooglePlaceAutocompleteContext;
}
