<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProjectTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testExample(): void
    {
        $response = $this->get('/');
        $response->assertOk();
        //$this->assertTrue(true);
    }
    public function testAuthorize(){
         $this->post('/login', [
            'email' => 'nadin@bk.ru',
            'password' => '17011990'
        ]);

         $response = $this->get('admin/test');
        $response->assertOk();
    }

}
