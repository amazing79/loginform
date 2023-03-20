<?php

namespace Tests\App;

use Tests\TestCase;

class RegisterUserTest extends TestCase
{
    public function testShowRegister(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testRegisterNewUser():void
    {
        $response = $this->post('/register/add');
        $response->assertStatus(200);
    }
}
