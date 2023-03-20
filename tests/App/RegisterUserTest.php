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
        $formValues = [];
        $formValues['nombre'] = 'Ignacio Jauregui';
        $formValues['mail'] = 'mimail@gmail.com';
        $formValues['password'] = 'tricampeon2022';
        $formValues['confirmPassord'] = 'tricampeon2022';
        $response = $this->post('/register/add', $formValues);
        $response->assertStatus(200);
    }
}
