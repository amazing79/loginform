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

    /**
     * @return void
     * Paso 1: Refactorizar tests para cumplir Criterios de aceptacion
     * El siguiente tests tiene como objetivo refactorizar la funcionalidad ya que no realiza chequeos, como por
     * ejemplo, el nombre en blanco
     */
    public function testCantRegisterUserWithEmptyName():void
    {
        $formValues = [];
        $formValues['nombre'] = '';
        $formValues['mail'] = 'mimail@gmail.com';
        $formValues['password'] = 'tricampeon2022';
        $formValues['confirmPassord'] = 'tricampeon2022';
        $response = $this->post('/register/add', $formValues);
        $response->assertStatus(400);
    }

    /**
     * @return void
     * Paso 2: Refactorizar tests para cumplir Criterios de aceptacion
     * Continuando con los criterios de aceptacion, se controlo que el mail no pueda ser vacio.
     */
    public function testCantRegisterUserWithEmptyMail():void
    {
        $formValues = [];
        $formValues['nombre'] = 'Ignacio Jauregui';
        $formValues['mail'] = '';
        $formValues['password'] = 'tricampeon2022';
        $formValues['confirmPassord'] = 'tricampeon2022';
        $response = $this->post('/register/add', $formValues);
        $response->assertStatus(400);
    }
}
