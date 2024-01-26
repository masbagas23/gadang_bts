<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiLoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $data = [
            'username' => 'masbagas',
            'password' => 'password'
        ];

        $response = $this->get('/api/login');

        $response->assertStatus(200);
    }
}
