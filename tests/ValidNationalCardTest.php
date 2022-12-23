<?php

namespace Milwad\LaravelValidate\Tests;

use Milwad\LaravelValidate\Rules\ValidNationalCard;

class ValidNationalCardTest extends BaseTest
{
    /**
     * Set up
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Test national_code_is_valid
     *
     * @test
     * @return void
     */
    public function national_code_is_valid()
    {
        $rules = ['national_card' => [new ValidNationalCard()]];
        $data = ['national_card' => '0151016437'];
        $passes = $this->app['validator']->make($data, $rules)->passes();

        $this->assertTrue($passes);
    }
}
