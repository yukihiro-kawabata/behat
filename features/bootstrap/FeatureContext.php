<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When :time 秒待つ
     */
    public function wait($time)
    {
        sleep($time);
    }

    /**
     * @When メールアドレスとパスワードを入力
     */
    public function inputEmailAndPassword()
    {
        // $MinkContext = new MinkContext();
        // $MinkContext->fillField('email', 'info@example.com');
        // $MinkContext->fillField('password', 'passpass');
    }

}
