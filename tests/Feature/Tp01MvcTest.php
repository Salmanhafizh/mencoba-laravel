<?php

namespace Tests\Feature;

use Tests\TestCase;

class Tp01MvcTest extends TestCase
{
    public function test_beranda_ditangani_controller()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Kantin FIT');
    }

    public function test_tentang_memuat_identitas()
    {
        $response = $this->get('/tentang');
        $response->assertStatus(200);
        $response->assertSee('Salman Hafizh Nashirulhaq');
    }
}