<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientCanSeeTheFormularyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_ClientCanSeeTheFormularyTest()
    {
        $this->get('/comandos')
            ->assertStatus(200)
            ->assertSee('Importar archivos CSV');
    }
}
