<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Shelter;
class ShelterTest extends TestCase
{

    //test get one, getall
    public function testShow(){
        $response = $this->json('GET', '/api/shelters');
        $response->assertStatus(200);
    }
    public function testIndex(){
        $shelter = factory(Shelter::class)->create();
        $response = $this->json('GET', sprintf('/api/shelters/%d/animals', $shelter->id));
        $response->assertStatus(200);
    }
}
