<?php

namespace Tests\App;

use Tests\TestCase;

class RegisterUserTest extends TestCase
{
    public function testRegisterNewUser(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
}
