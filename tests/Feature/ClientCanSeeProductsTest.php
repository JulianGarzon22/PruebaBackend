<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientCanSeeProductsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_ClientCanSeeProductsTest()
    {
        $this->get('/inicio')
            ->assertStatus(200)
            ->assertSee('Lista de Productos');
    }
}
