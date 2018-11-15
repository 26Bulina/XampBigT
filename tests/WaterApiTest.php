<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WaterApiTest extends TestCase
{
    use MakeWaterTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateWater()
    {
        $water = $this->fakeWaterData();
        $this->json('POST', '/api/v1/waters', $water);

        $this->assertApiResponse($water);
    }

    /**
     * @test
     */
    public function testReadWater()
    {
        $water = $this->makeWater();
        $this->json('GET', '/api/v1/waters/'.$water->id);

        $this->assertApiResponse($water->toArray());
    }

    /**
     * @test
     */
    public function testUpdateWater()
    {
        $water = $this->makeWater();
        $editedWater = $this->fakeWaterData();

        $this->json('PUT', '/api/v1/waters/'.$water->id, $editedWater);

        $this->assertApiResponse($editedWater);
    }

    /**
     * @test
     */
    public function testDeleteWater()
    {
        $water = $this->makeWater();
        $this->json('DELETE', '/api/v1/waters/'.$water->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/waters/'.$water->id);

        $this->assertResponseStatus(404);
    }
}
