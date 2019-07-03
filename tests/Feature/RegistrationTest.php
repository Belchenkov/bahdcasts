<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    public function test_a_user_has_a_default_username_after_registration()
    {
        /*
        $this->post('/register', [
            'name' => 'simple3 name',
            'email' => 'test33@gmail.com',
            'password' => '12qwasZX123qww'
        ])->assertRedirect();

        $this->assertDatabaseHas('users', [
            'username' => str_slug('simple name'),
        ]);*/
    }

    public function test_an_email_is_sent_to_newly_registered_users()
    {

    }
}
