<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_clientid_request()
    {
        $response = $this->get('/client/1');

        $response->assertStatus(200);
    }

    public function test_unexisting_client()
    {
        $response = $this->get('/client/10000');

        $response->assertStatus(404);
    }

    public function test_client_response()
    {
        $response = $this->get('/client/1');

        $response->assertViewHas('client');
    }
}
