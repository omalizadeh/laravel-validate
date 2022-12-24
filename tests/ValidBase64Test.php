<?php

namespace Milwad\LaravelValidate\Tests;

use Milwad\LaravelValidate\Rules\ValidBase64;

class ValidBase64Test extends BaseTest
{
    /**
     * Set up.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Test base64 is valid.
     *
     * @test
     * @return void
     */
    public function base64_is_valid()
    {
        $rules = ['base64' => [new ValidBase64()]];
        $data = ['base64' => 'bWlsd2Fk']; // milwad
        $passes = $this->app['validator']->make($data, $rules)->passes();

        $this->assertTrue($passes);
    }
}