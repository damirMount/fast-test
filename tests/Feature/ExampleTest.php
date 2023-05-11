<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/home');
        $bodyText = $response->getContent();

        $response->assertStatus(200);
        $response->assertSeeText('Laravel');
        $response->assertSee('Laravel');

    }
}
