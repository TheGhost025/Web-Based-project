<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{

    public function test_example()
    {


        $response = $this->post('/submit.form', [
            'full_name' => 'Ahmed Hassan Abdelhameed',
        'user_name' => 'Ahmed',
        'birthdate' => '2000-02-02',
        'phone' => '01128793499',
        'address' => '8th district 3rd mojwra zayed city',
        'password' => 'Ahmed@123',
        'confirm_password' => 'Ahmed@123',
        'user_image'=>'',
        'email' => 'ammodi9@gmail.com'
        ]);
        $response->assertStatus(419);

    }
}


