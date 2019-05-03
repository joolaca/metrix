<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

// .\vendor\bin\phpunit --filter 'Tests\\Feature\\ExampleTest'
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        $send_data=[
            'name' =>'laca',
            'email' =>'laca@a.com',
            'content' =>'content',

        ];
        $response = $this->call('POST', '/send_contact_email', $send_data);
        $response->assertStatus(200);
        $content = $response->getContent();
        dd($content);



        $this->assertTrue(false);


    }
}
