<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function verify_logged_users_can_access_home_page(): void
    {
        $response = $this->get('/home');

        $response->assertRedirect('/login');
    }
}
