<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
// use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function test_example()
=======
    public function test_the_application_returns_a_successful_response()
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
