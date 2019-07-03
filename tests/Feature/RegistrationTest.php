<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    public function test_a_user_has_a_default_username_after_registration()
    {/*
        $this->post('/register', [
            'name' => 'simple3 name',
            'email' => 'test33@gmail.com',
            'password' => '12qwasZX123qww'
        ])->assertRedirect();*/

        $this->assertDatabaseHas('users', [
            'username' => str_slug('simple name'),
        ]);
    }
}
